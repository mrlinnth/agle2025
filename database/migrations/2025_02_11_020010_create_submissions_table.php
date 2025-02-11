<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('institution');
            $table->string('country');
            $table->string('phone');
            $table->text('abstract');
            $table->string('title');
            $table->string('keywords');
            $table->string('file');
            $table->string('status')->default('pending'); // e.g. pending, approved, rejected
            $table->string('reference');
            $table->boolean('is_edited')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
