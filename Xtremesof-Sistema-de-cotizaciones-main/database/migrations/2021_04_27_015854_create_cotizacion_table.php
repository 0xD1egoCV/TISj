<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('fecha_emision_cot');
            $table->integer('numero_cot');
            $table->integer('cant_cot');
            $table->string('detalle_cot');
            $table->double('precio_unit_cot');
            $table->double('precio_total_cot');
            $table->string('moneda_cot');
            $table->date('validez_oferta_cot');
            $table->string('forma_pago_cot');
            $table->date('entrega_tiempo_cot');
            $table->date('tiempo_garantia_cot');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion');
    }
}
