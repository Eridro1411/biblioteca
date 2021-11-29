<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBookGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_genre', function (Blueprint $table) {
            $table->bigInteger("book_id")->unsigned()->nullable();
            $table->bigInteger("genre_id")->unsigned()->nullable();
            $table->foreign("book_id")->references("id")->on("books");
            $table->foreign("genre_id")->references("id")->on("genres");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_genre', function (Blueprint $table) {
            //
        });
    }
}
