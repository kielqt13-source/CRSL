<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Groups multiple files uploaded together in one batch-upload session.
     * Normalises the loose batch_uuid string that was scattered across recognition rows.
     */
    public function up(): void
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('document_type_id')->constrained('document_types')->onDelete('restrict');
            $table->uuid('batch_uuid')->unique();
            $table->unsignedSmallInteger('file_count')->default(0);
            $table->timestamps();

            $table->index('batch_uuid');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
