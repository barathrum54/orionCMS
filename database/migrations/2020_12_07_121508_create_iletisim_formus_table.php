<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIletisimFormusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iletisim_formus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('isim')->nullable();
            $table->string('eposta')->nullable();
            $table->string('telefon')->nullable();
            $table->text('mesaj')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iletisim_formus');
    }
}
