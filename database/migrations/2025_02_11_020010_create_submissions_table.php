<?php

use App\Enums\PositionEnum;
use App\Enums\StatusEnum;
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
            $table->string('email');
            $table->enum('position', array_column(PositionEnum::cases(), 'value'));
            $table->string('institution');
            $table->string('country');
            $table->string('first_author');
            $table->string('corresponding_author')->nullable();
            $table->string('other_author')->nullable();
            $table->string('paper_title')->nullable();
            $table->string('file');
            $table->json('presentation_options');
            $table->enum('status', array_column(StatusEnum::cases(), 'value'))->default(StatusEnum::PENDING->value);
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
