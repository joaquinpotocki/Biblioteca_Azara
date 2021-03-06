<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->date('fecha_devolucion_real');
            $table->string('cantidad');
            
            $table->boolean('confirmacionMail')->nullable();

            //Relacion con lector
            $table->unsignedBigInteger('lector_id')->unsigned();
            $table->foreign('lector_id')->references('id')->on('lectores');
            //Relacio con estados
            $table->unsignedBigInteger('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->unsignedBigInteger('estado_devolucion_id')->unsigned();
            $table->foreign('estado_devolucion_id')->references('id')->on('estado_devolucions');

            $table->softDeletes();
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
        Schema::dropIfExists('movimientos');
    }
}
