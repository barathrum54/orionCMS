<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHizmetlerimizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hizmetlerimizs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('hizmetlerimiz_col1_baslik')->nullable();
            $table->string('hizmetlerimiz_col1_metin')->nullable();
            $table->string('hizmetlerimiz_col2_baslik')->nullable();
            $table->string('hizmetlerimiz_col2_metin')->nullable();
            $table->string('hizmetlerimiz_col3_baslik')->nullable();
            $table->string('hizmetlerimiz_col3_metin')->nullable();
            $table->string('hizmetlerimiz_col4_baslik')->nullable();
            $table->string('hizmetlerimiz_col4_metin')->nullable();
            $table->string('hizmetlerimiz_col5_baslik')->nullable();
            $table->string('hizmetlerimiz_col5_metin')->nullable();
            $table->string('hizmetlerimiz_col6_baslik')->nullable();
            $table->string('hizmetlerimiz_col6_metin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hizmetlerimizs');
    }
}
