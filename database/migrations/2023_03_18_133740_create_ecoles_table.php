<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> long('code_etablissement');
            $table-> String('cre ');
            $table-> String('delegation');
            $table-> String('nom_etablissemnt');
            $table->String('type');
            $table->String('region ');
            $table->float('latitude');
            $table->float('longitude');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecoles');
    }
}
