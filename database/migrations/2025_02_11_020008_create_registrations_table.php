<?php

use App\Enums\AuthorTypeEnum;
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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->enum('position', array_column(PositionEnum::cases(), 'value'));
            $table->string('student_id')->nullable();
            $table->string('institution');
            $table->string('country');
            $table->boolean('has_paper')->default(false);
            $table->enum('author_type', array_column(AuthorTypeEnum::cases(), 'value'))->nullable();
            $table->string('paper_title')->nullable();
            $table->boolean('join_trip')->default(false);
            $table->boolean('join_dinner')->default(false);
            $table->json('participation_options');
            $table->string('payment');
            $table->integer('pax')->default(1); // e.g. 1, 2, 3, etc.
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
        Schema::dropIfExists('registrations');
    }
};
