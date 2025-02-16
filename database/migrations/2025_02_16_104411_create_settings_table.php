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
            $table->string('event_name');
            $table->string('event_title');
            $table->string('event_duration');
            $table->string('event_location');
            $table->string('event_deadline');
            $table->string('contact_address');
            $table->string('contact_map');
            $table->string('contact_phone')->nullable();
            $table->string('contact_mail')->nullable();
            $table->string('noti_email');
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
