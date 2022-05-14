<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavstevyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navstevy', function (Blueprint $table) {
            $table->increments('id_navstevy');
            $table->inetegr('rodne_cislo');
            $table->string('popis');
            $table->date('datum_navstevy');
            $table->time('cas_navstevy');
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
        Schema::drop('navstevy');
    }
}
