<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculationVehicule');
            $table->string('typeTransmission');
            $table->string('couleur');
            $table->string('energie');
            $table->unsignedInteger("marque_id")->constrained();
            $table->unsignedInteger("modele_id")->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->dropForeign(["marque_id", "modele_id"]);
        });
        Schema::dropIfExists('vehicules');
    }
}
