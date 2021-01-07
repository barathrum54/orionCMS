<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aramas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kategori')->nullable();
            $table->string('link')->nullable();
            $table->string('baslik')->nullable();
            $table->string('aciklama')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aramas');
    }
}
