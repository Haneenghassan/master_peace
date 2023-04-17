<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('mobile');
            // $table->dateTime('res_date');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('child_firstname');
            $table->string('child_lastname');
            $table->string('child_age');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('babysitter_id')->constrained('babysitters')->cascadeOnDelete();
            $table->foreignId('preschool_id')->constrained('preschools')->cascadeOnDelete();
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
        Schema::dropIfExists('reservations');
    }
};
