<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //sss
         Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('album_name');
            $table->string('album_art');
            $table->string('album_description');
            $table->string('album_release_date');
            $table->string('album_compiled_by');
            $table->string('album_mastering');
            $table->string('album_artwork');
            $table->string('album_mainart');
            $table->string('album_soundcloud');
            $table->string('album_youtube');
            $table->string('album_youtubeVideo');
            $table->string('album_facebook');
            $table->integer('album_featured');
            $table->integer('artist_id')->unsigned();
            $table->timestamps();

            $table->foreign('artist_id')
                  ->references('id')
                  ->on('Artists');
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
        Schema::drop('Albums');
    }
}
