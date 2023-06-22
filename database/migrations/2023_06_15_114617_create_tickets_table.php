<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code')->unique();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->enum('status', ['open', 'close', 'in-progress', 'escalate'])->default('open');
            $table->foreignUuid('customer')->nullable();
            $table->foreignUuid('assignedTo')->nullable();
            $table->foreignUuid('assignedBy')->nullable();
            $table->foreignUuid('escalatedTo')->nullable();
            $table->foreignUuid('escalatedBy')->nullable();
            $table->enum('delete', ['1', '0'])->default('0');
            $table->enum('resolved', ['true', 'false'])->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};