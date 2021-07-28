<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string("libelleMaintenance");
            $table->ForeignId("facture_id")->constrained();
            $table->ForeignId("garage_id")->constrained();
            $table->ForeignId("vehicule_id")->constrained();
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
        Schema::table('maintenances', function (Blueprint $table) {
            $table->dropForeign(["facture_id", "garage_id", "vehicule_id"]);
        });
        Schema::dropIfExists('maintenances');
    }
}
