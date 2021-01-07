<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hakkimizdanewdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hakkimizdas', function (Blueprint $table) {
            $table->string('hakkimizda_baslik_1')->nullable();
            $table->string('hakkimizda_alt_baslik_1')->nullable();
            $table->string('hakkimizda_metin_1')->nullable();
            $table->string('hakkimizda_baslik_2')->nullable();
            $table->string('hakkimizda_alt_baslik_2')->nullable();
            $table->string('hakkimizda_metin_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hakkimizdas', function (Blueprint $table) {
            //
        });
    }
}
