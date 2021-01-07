<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHakkimizdasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hakkimizdas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('banner_baslik')->nullable();
            $table->string('banner_banner')->nullable();
            $table->string('hakkimizda_col1_baslik')->nullable();
            $table->string('hakkimizda_col1_metin')->nullable();
            $table->string('hakkimizda_col2_baslik')->nullable();
            $table->string('hakkimizda_col2_metin')->nullable();
            $table->string('hakkimizda_col3_baslik')->nullable();
            $table->string('hakkimizda_col3_metin')->nullable();
            $table->string('hakkimizda_col4_baslik')->nullable();
            $table->string('hakkimizda_col4_metin')->nullable();
            $table->string('hakkimizda_col5_baslik')->nullable();
            $table->string('hakkimizda_col5_metin')->nullable();
            $table->string('hakkimizda_col6_baslik')->nullable();
            $table->string('hakkimizda_col6_metin')->nullable();
            $table->string('hakkimizda_sayac1_baslik')->nullable();
            $table->string('hakkimizda_sayac1_sayi')->nullable();
            $table->string('hakkimizda_sayac2_baslik')->nullable();
            $table->string('hakkimizda_sayac2_sayi')->nullable();
            $table->string('hakkimizda_sayac3_baslik')->nullable();
            $table->string('hakkimizda_sayac3_sayi')->nullable();
            $table->string('hakkimizda_sayac4_baslik')->nullable();
            $table->string('hakkimizda_sayac4_sayi')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hakkimizdas');
    }
}
