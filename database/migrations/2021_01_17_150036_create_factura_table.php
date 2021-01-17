<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->integer('CodigoF')->autoIncrement();
            $table->integer('cliente');
            $table->foreign('cliente')->references('id')->on('clientes');
            $table->integer('categoria');
            $table->foreign('categoria')->references('id')->on('categorias');
            $table->integer('producto');
            $table->foreign('producto')->references('id')->on('productos');
            $table->double('total',8,2);
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
        Schema::table('factura', function (Blueprint $table) {
            //
        });
    }
}
