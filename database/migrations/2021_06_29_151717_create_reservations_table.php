<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->double("coutReservation");
            $table->string("etatReservation");
            $table->dateTime("dateDebut");
            $table->dateTime("dateFin");
            $table->dateTime("dateReservation");
            $table->foreignId("employe_id")->constrained();
            $table->foreignId("chauffeur_id")->constrained();
            $table->foreignId("particulier_id")->constrained();
            $table->foreignId("entreprise_id")->constrained();
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
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign(["client_id", "employe_id", "chauffeur_id", "particulier_id", "entreprise_id"]);
        });
        Schema::dropIfExists('reservations');
    }
}
