<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookGenrePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('book_genre', function(Blueprint $table)
      {
        $table->integer('book_id')->unsigned()->index();
        $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        $table->integer('genre_id')->unsigned()->index();
        $table->foreign('genre_id')->references('id')->on('genres');
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
    }
}
