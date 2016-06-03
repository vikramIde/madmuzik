<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        //ssss
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artist_name');
            $table->string('artist_code');
            $table->string('artist_soundcloud');
            $table->string('artist_image');
            $table->string('artist_title');
            $table->string('artist_fb');
            $table->string('artist_phone');
            $table->string('artist_address');
            $table->string('artist_youtube');
            $table->string('artist_description');
            $table->integer('followers');
            $table->string('status');
            $table->integer('artist_featured');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('Artists');
    }
}
