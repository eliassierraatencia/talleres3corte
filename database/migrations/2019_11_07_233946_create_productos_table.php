<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->decimal('precio',15,2);
            $table->integer('proveedor_id')->unsigned();
            $table->string('categoria');
            $table->foreign('proveedor_id')
            ->references('id')
            ->on('proveedores')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
