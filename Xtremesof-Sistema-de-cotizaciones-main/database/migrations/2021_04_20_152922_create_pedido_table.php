<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->string ('nro_ped');
            $table->string ('codigo_proyecto_ped');
            $table->date ('fecha_emision_ped');
            $table->integer ('cant_ped');
            $table->string ('descripcion_ped');
            $table->string ('justificacion_ped');
           // $table->string ('unidad_gasto_ped'); //nombre de los labos u otros
            $table->string ('coord_ped'); //parte administrativa
            $table->date ('fecha_entrega_apro_ped');//debe llenar la parte administrativa
            $table->date ('fecha_recibo_ped');//cuando ya esta aprobado por el administrativo
            $table->string ('responsable_ped');//unidad de gasto que solicita el pedido
    
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
        Schema::dropIfExists('pedido');
    }
}
