<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class NivelAcesso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel_acesso', function (Blueprint $table) {

            $table->increments    ('id');
            $table->string        ('nome')
                ->nullable        (false);
            $table->string        ('role')
                ->nullable        (false);
            $table->dateTime      ('dat_inclusao')
                ->default         (DB::raw('CURRENT_TIMESTAMP'));
            $table->integer       ('removido')
                ->default         ('0')
                ->nullable        (false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivel_acesso');
    }
}

