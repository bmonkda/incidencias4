<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('slug');
            $table->longText('descripcion');

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade')->nullable();
            $table->foreignId('emergency_id')->references('id')->on('emergencies')->onDelete('cascade');
            // $table->enum('status', [1, 2])->default(1);
            //foreignId('estatu_id') default(1)->references('id')->on('estatus')->onDelete('cascade');
            // esta es la linea que tengo antes de probar
            $table->foreignId('estatu_id')->references('id')->on('estatus')->onDelete('cascade');

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
        Schema::dropIfExists('incidencias');
    }
}
