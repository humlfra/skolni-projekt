<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacienti', function (Blueprint $table) {
            $table->increments('id_pacienta');
            $table->string('jmeno');
            $table->string('prijmeni');
            $table->integer('rodne_cislo');
            $table->integer('cislo_pojistovny');
            $table->string('samoplatce');
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
        Schema::drop('pacienti');
    }
}
