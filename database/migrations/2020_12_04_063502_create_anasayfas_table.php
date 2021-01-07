<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnasayfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anasayfas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ib_baslik');
            $table->string('ib_metin');
            $table->string('ib_col1_baslik');
            $table->string('ib_col1_metin');
            $table->string('ib_col2_baslik');
            $table->string('ib_col2_metin');
            $table->string('ib_col3_baslik');
            $table->string('ib_col3_metin');
            $table->string('ib_col4_baslik');
            $table->string('ib_col4_metin');
            $table->string('video_baslik');
            $table->string('video_resim');
            $table->string('video_link');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anasayfas');
    }
}
