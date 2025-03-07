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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('noti_email');
            $table->string('logo')->nullable();
            $table->json('countdown')->nullable();
            $table->json('contact')->nullable();
            $table->json('footer')->nullable();
            $table->json('home')->nullable();
            $table->json('conference')->nullable();
            $table->json('committees')->nullable();
            $table->json('organizers')->nullable();
            $table->json('abstract')->nullable();
            $table->json('registration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
