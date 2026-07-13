<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Audit trail for all user actions in the system.
     * Tracks: uploads, batch_uploads, verify, reject, login, logout, etc.
     *
     * Polymorphic loggable_type / loggable_id links to any model
     * (e.g. Recognition, Batch) without needing separate join tables.
     */
    public function up(): void
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();

            // Nullable — logs survive user deletion
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();

            $table->string('action', 64);   // upload | batch_upload | verify | reject | login …
            $table->string('description');  // human-readable sentence

            // Polymorphic relation to the subject (e.g. Recognition, Batch)
            $table->string('loggable_type')->nullable();
            $table->unsignedBigInteger('loggable_id')->nullable();

            $table->string('ip_address', 45)->nullable(); // IPv4 or IPv6

            $table->timestamps();

            $table->index(['loggable_type', 'loggable_id']);
            $table->index(['user_id', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
