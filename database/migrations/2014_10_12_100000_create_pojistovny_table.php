<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePojistovnyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pojistovny', function (Blueprint $table) {
            $table->increments('id_pojistovny');
            $table->string('nazev_pojistovny');
            $table->bigInteger('cislo_pojistovny');
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
        Schema::drop('pojistovny');
    }
}
