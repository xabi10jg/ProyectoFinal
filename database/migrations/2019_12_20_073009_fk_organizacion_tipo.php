<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkOrganizacionTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizacion', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_id')->nullable()->after('horarioCierre');

            $table->foreign('tipo_id')->references('id')->on('tipo');
        });

        Schema::disableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['tipo_id']);
    }
}
