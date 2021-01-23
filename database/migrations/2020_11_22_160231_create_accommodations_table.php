<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->string('description',255);
            $table->string('address', 128);
            $table->integer('room_count');
            $table->integer('bed_count');
            $table->integer('max_person_count');
            $table->boolean('is_available');
            $table->decimal('price_per_night', 8, 2);
            $table->foreignId('accommodation_type_id')
            ->nullable()
            ->constrained()
            ->onDelete('set null');           
            $table->foreignId('city_id')
            ->nullable()
            ->constrained()
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodations');
    }
}
