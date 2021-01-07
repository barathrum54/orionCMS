<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolyosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolyos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('baslik')->nullable();
            $table->string('kategori')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('content')->nullable();
            $table->string('galeri')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolyos');
    }
}
