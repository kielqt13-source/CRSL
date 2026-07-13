<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Stores extracted and corrected field values per recognition.
     *
     * Replaces the extracted_fields / corrected_fields JSON blobs
     * on the old recognitions table.
     *
     * Each row = one field for one recognition.
     * e.g. recognition_id=5, field_key='child_first_name', ai_value='Juan', corrected_value='Juanito'
     *
     * Benefits over JSON blobs:
     *   - Queryable / filterable per field (WHERE field_key = 'registry_number')
     *   - AI value vs human correction are clearly separated
     *   - Each field can be individually marked as verified
     */
    public function up(): void
    {
        Schema::create('recognition_fields', function (Blueprint $table) {
            $table->id();

            $table->foreignId('recognition_id')
                  ->constrained('recognitions')
                  ->onDelete('cascade');

            $table->string('field_key');        // e.g. 'child_first_name'
            $table->text('ai_value')->nullable();
            $table->text('corrected_value')->nullable();
            $table->boolean('is_verified')->default(false);

            $table->timestamps();

            // One field key per recognition
            $table->unique(['recognition_id', 'field_key']);
            $table->index('field_key');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recognition_fields');
    }
};
