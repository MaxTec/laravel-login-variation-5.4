<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement("
        CREATE VIEW view_usuarios AS (
          SELECT id_usuarios AS id, correo AS email, password, remember_token FROM usuarios
        );

        CREATE VIEW view_clientes AS (
          SELECT id_clientes AS id, correo AS email, notarjeta AS password, remember_token FROM clientes
        );

        ### Revisar
        CREATE VIEW view_users AS (
          SELECT id, email, password, remember_token FROM view_usuarios
          UNION ALL
              SELECT id, email, password, remember_token FROM view_clientes)
        );
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement('DROP VIEW view_users');
    }
}
