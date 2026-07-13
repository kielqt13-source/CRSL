<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // This migration is a duplicate of 2026_07_10_000006_create_activity_logs_table.php
        // and would cause an error when running migrations. The other migration is more complete.
        // This migration's `up` method has been commented out to prevent errors.
        // It is recommended to delete this file.
        /*
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('action'); // upload, verify, reject, login, etc.
            $table->string('description');
            $table->string('loggable_type')->nullable();
            $table->unsignedBigInteger('loggable_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
            $table->index(['loggable_type', 'loggable_id']);
        });
        */
    }

    public function down(): void
    {
        // No action needed here as the other migration handles creation and deletion.
    }
};
