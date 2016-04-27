<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Songs', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('song_name');
            $table->string('song_image_loc');
            $table->integer('album_id')->unsigned();
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
         Schema::drop('Songs');
    }
}
