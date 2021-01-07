<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hizmetlerimiznewdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hizmetlerimizs', function (Blueprint $table) {
          $table->text('sss_baslik')->nullable();
          $table->text('sss_1_baslik')->nullable();
          $table->text('sss_1_metin')->nullable();
          $table->text('sss_2_baslik')->nullable();
          $table->text('sss_2_metin')->nullable();
          $table->text('sss_3_baslik')->nullable();
          $table->text('sss_3_metin')->nullable();
          $table->text('sss_4_baslik')->nullable();
          $table->text('sss_4_metin')->nullable();
          $table->text('sss_5_baslik')->nullable();
          $table->text('sss_5_metin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hizmetlerimizs', function (Blueprint $table) {
            //
        });
    }
}
