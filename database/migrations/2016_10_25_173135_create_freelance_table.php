<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelances', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('dni');
            $table->text('location');
            $table->text('country');
            $table->date('birthdate');
            $table->text('emails');
            $table->text('phonenumbers');
            $table->text('externallinks');
            $table->text('languages');
            $table->double('priceperhourmin');
            $table->double('priceperhournormal');
            $table->text('comments');
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
        Schema::drop('freelances');
    }
}
