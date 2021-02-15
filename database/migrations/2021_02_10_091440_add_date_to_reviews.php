<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->string('book_date',30)->nullable();
            $table->string('return_date',30)->nullable();
            $table->string('date',30)->nullable();
            $table->string('note',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            //
        });
    }
}
