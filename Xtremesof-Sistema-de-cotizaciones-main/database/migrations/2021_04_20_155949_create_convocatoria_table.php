<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConvocatoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatoria', function (Blueprint $table) {
            $table->id();
            //cree esto para que la parte adminastrativa lanza
            $table->string('codigo');
            $table->date('fecha_conv');
           // $table->int ('nro_coti_conv');revisar
            $table->string ('descripcion_conv');
           // $table->double ('precioUnit_sol');
          // $table->double ('precioTotal_sol');
            $table->string('responsable_conv'); //es el que publica los requirimientos para externos
        
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
        Schema::dropIfExists('convocatoria');
    }
}
