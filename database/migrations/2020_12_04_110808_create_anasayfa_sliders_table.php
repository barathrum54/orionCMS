<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnasayfaSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anasayfa_sliders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slider_gorsel')->nullable();
            $table->string('slider_aciklama')->nullable();
            $table->string('slider_sira')->nullable();
            $table->string('slider_aktif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anasayfa_sliders');
    }
}
