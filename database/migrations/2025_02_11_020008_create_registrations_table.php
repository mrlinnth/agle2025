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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('institution');
            $table->string('email');
            $table->string('phone');
            $table->string('role'); // e.g. student, faculty, others
            $table->string('payment');
            $table->integer('pax')->default(1); // e.g. 1, 2, 3, etc.
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
        Schema::dropIfExists('registrations');
    }
};
