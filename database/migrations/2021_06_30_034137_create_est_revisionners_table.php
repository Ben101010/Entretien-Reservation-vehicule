<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstRevisionnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('est_revisionners', function (Blueprint $table) {
            $table->string("libelleRevisionner");
            $table->foreignId("Nature_Revison_id")->constrained();
            $table->foreignId("vehicule_id")->constrained();
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
        Schema::table('est_revisionners', function (Blueprint $table) {
            $table->dropForeign(["Nature_Revison_id", "vehicule_id"]);
        });
        Schema::dropIfExists('est_revisionners');
    }
}
