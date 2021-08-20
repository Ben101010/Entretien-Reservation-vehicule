<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_reservations', function (Blueprint $table) {
            $table->integer("kmDepart");
            $table->integer("kmArrive");
            $table->dateTime("dateDepart");
            $table->dateTime("dateArrive");
            $table->foreignId("vehicule_id")->constrained();
            $table->foreignId("reservation_id")->constrained();
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
        Schema::table('ligne_reservations', function (Blueprint $table) {
            $table->dropForeign(["Vehicule_id", "reservation_id"]);
        });
        Schema::dropIfExists('ligne_reservations');
    }
}
