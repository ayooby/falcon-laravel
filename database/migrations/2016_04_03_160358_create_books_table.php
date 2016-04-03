<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {

          $table->increments('id');
          $table->integer('author_id')->unsigned();
          $table->string('title');
          $table->text('price');
          $table->timestamps();
          $table->timestamp('release_date');
          $table->foreign('author_id')->references('id')->on('authors');



        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books', function (Blueprint $table) {
            //
        });
    }
}
