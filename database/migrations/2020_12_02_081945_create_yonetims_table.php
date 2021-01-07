<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYonetimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yonetims', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('facebook_link');
            $table->string('linkedin_link');
            $table->string('twitter_link');
            $table->string('youtube_link');
            $table->string('googleplus_link');
            $table->string('behance_link');
            $table->string('telefon1');
            $table->string('telefon2');
            $table->string('teklif_mail');
            $table->string('iletisim_mail');
            $table->string('ik_mail');
            $table->string('fiziksel_adres');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yonetims');
    }
}
