<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('descripcion', 50);      
            $table->decimal('precio', 10, 2);
            $table->integer('cantidad');
            $table->string('marca', 50);
            $table->string('imagen', 75);
            $table->integer('descuento');
            $table->string('empresaProveedora', 100);
            $table->timestamps();
            $table->unsignedBigInteger('inventario_id');
            $table->foreign('inventario_id')->references('id')->on('inventarios')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}