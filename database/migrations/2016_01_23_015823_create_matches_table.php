<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('winning_team', 30)->nullable();
            $table->string('losing_team', 30)->nullable();
            $table->text('game_date');
            $table->integer('cups_left');
            $table->integer('overtime');
            $table->text('comments');
            $table->dateTime('created_at');

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
