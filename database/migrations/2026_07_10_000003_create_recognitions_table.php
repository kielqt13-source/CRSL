<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Core OCR job — one row per uploaded file.
     *
     * Normalised from the old flat table:
     *   - document_type     → FK to document_types
     *   - batch_id          → FK to batches (nullable)
     *   - extracted_fields  → moved to recognition_fields table
     *   - corrected_fields  → moved to recognition_fields table
     *   - verified_by       → proper FK to users with nullOnDelete
     */
    public function up(): void
    {
        Schema::create('recognitions', function (Blueprint $table) {
            $table->id();

            // Who uploaded this document
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Optional: part of a batch upload session
            $table->foreignId('batch_id')
                  ->nullable()
                  ->constrained('batches')
                  ->nullOnDelete();

            // Document classification — FK to lookup table
            $table->foreignId('document_type_id')
                  ->nullable()
                  ->constrained('document_types')
                  ->nullOnDelete();

            // Uploaded file details
            $table->string('file_path');
            $table->string('original_filename');
            $table->enum('file_type', ['image', 'pdf', 'word'])->default('image');

            // OCR pipeline status
            $table->enum('status', [
                'pending',
                'processing',
                'completed',
                'failed',
                'verified',
                'rejected',
            ])->default('pending');

            // Raw OCR output
            $table->text('recognized_text')->nullable();
            $table->decimal('confidence', 5, 2)->nullable();  // 0.00–100.00

            // Full API/script response (kept for debugging)
            $table->json('api_response')->nullable();

            // Verification
            $table->unsignedBigInteger('verified_by')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->text('rejection_reason')->nullable();

            $table->timestamps();

            // Indexes for common query patterns
            $table->index('status');
            $table->index(['user_id', 'status']);
            $table->index('document_type_id');

            // Verifier FK — declared after the column to keep migration readable
            $table->foreign('verified_by')
                  ->references('id')->on('users')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recognitions');
    }
};
