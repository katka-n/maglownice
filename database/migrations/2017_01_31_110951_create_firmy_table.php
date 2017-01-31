<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmy', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->mediumIncrements('id');
            $table->smallInteger('priorytet');
            $table->string('klucz', 100);
            $table->string('nazwa', 100);
            $table->string('ulica', 100);
            $table->string('kod', 20);
            $table->string('miasto', 100);
            $table->string('wojewodztwo', 100);
            $table->string('telefon', 100);
            $table->string('zdjecie_1', 100);
            $table->string('zdjecie_2', 100);
            $table->string('zdjecie_3', 100);
            $table->string('zdjecie_4', 100);
            $table->string('zdjecie_5', 100);
            $table->string('zdjecie_66', 100);
            $table->string('wlasciciel_firmy', 100);
            $table->string('telefon_do_wlasciciela', 100);
            $table->string('voip', 30);
            $table->string('key', 10)->unique();
            $table->string('value_ldz', 5);
            $table->string('value_sos', 5);
            $table->smallInteger('value');
            $table->string('bonus', 5);
            $table->date('data_dodania');
            $table->tinyInteger('wyswietlanie_telefonu');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firmy');
    }
}
