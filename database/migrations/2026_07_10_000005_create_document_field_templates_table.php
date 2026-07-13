<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Defines what fields belong to each document type.
     *
     * Replaces the hardcoded Recognition::getDocumentFields() method.
     * Field definitions are now data-driven and seeded via DocumentTypeSeeder.
     *
     * Example rows:
     *   document_type_id=1, field_key='child_first_name', field_label="Child's First Name", field_type='text',  sort_order=2
     *   document_type_id=1, field_key='sex',              field_label='Sex',                field_type='select', field_options='["Male","Female"]', sort_order=5
     */
    public function up(): void
    {
        Schema::create('document_field_templates', function (Blueprint $table) {
            $table->id();

            $table->foreignId('document_type_id')
                  ->constrained('document_types')
                  ->onDelete('cascade');

            $table->string('field_key');    // snake_case identifier, used as form name
            $table->string('field_label'); // human-readable label shown in the UI
            $table->enum('field_type', ['text', 'date', 'select', 'textarea'])->default('text');
            $table->json('field_options')->nullable();  // for 'select' type: ["Male","Female"]
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_required')->default(false);

            $table->timestamps();

            // A document type cannot have two fields with the same key
            $table->unique(['document_type_id', 'field_key']);
            $table->index(['document_type_id', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('document_field_templates');
    }
};
