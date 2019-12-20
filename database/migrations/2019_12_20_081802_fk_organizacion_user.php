<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkOrganizacionUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizacion', function (Blueprint $table) {
            $table->unsignedBigInteger('encargado_id')->nullable()->after('tipo_id');

            $table->foreign('encargado_id')->references('id')->on('users');
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
        $table->dropForeign(['encargado_id']);
    }
}
