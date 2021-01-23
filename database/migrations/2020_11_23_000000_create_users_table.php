<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('last_online')->nullable();

            /* spoji sa tablicom countries, kolonom id */
            $table->foreignId('county_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            /* spoji sa tablicom roles, kolonom id */
            $table->foreignId('role_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');
            
            /* created_at, updated_at */
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
        Schema::dropIfExists('users');
    }
}