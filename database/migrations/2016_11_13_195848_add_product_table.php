<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductTable extends Migration
{
    /**
     * Run the migrations.
     * up sirve para crear
     *
     * @return void
     */
    public function up()
    {
        //increments es la primary key
        //string creara un campo varchar
        //timestamps creara un campo created_at y otro updated_at que se actualizaran en automatico
        //softdeletes creata un campo de deleted_at laravel automaticamente se hara cargo de este campo
        Schema::create('vin_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     * este sirve para volver al estado anterior, siempre lo debe de llevar, para que se pueda llevar bien control
     * @return void
     */
    public function down()
    {
        //tira la tabla (vuelve al estado anterior)
        Schema::drop('vin_product');
    }
}
