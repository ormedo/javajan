<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelanceTecnologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('freelance_tecnology', function (Blueprint $table) {
            $table->integer('freelance_id')->unsigned();
            $table->integer('tecnology_id')->unsigned();
            $table->text('experience');
            $table->text('grade');
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
        Schema::drop('freelance_tecnology');
    }
}
