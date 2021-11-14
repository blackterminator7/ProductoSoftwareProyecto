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
<<<<<<< HEAD
            $table->string('descripcion', 50);      
=======
            $table->string('descripcion', 250);
>>>>>>> 493f074545b4b609a74ebc23d40d32df16489fe7
            $table->decimal('precio', 10, 2);
            $table->integer('cantidad');
            $table->string('marca', 50);
            $table->string('imagen', 75);
            $table->integer('descuento');
            $table->string('empresaProveedora', 100);
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
        Schema::dropIfExists('articulos');
    }
}