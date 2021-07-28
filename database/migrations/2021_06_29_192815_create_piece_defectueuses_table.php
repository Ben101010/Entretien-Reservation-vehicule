<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceDefectueusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece_defectueuses', function (Blueprint $table) {
            $table->id();
            $table->string("libellePiece");
            $table->foreignId("fournisseur_id")->constrained();
            $table->foreignId("maintenance_id")->constrained();
            $table->timestamps();
        });

        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('piece_defectueuses', function (Blueprint $table) {
            $table->dropForeign(["fournisseur_id", "maintenance_id"]);
        });
        Schema::dropIfExists('piece_defectueuses');
    }
}
