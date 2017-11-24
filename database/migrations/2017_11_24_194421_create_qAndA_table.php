<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQAndATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qAndA', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('question');
            $table->text('answerA');
            $table->text('answerB');
            $table->text('answerC');
            $table->text('answerD');
            $table->text('answerE');
            $table->int('correctAnswer');
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
        Schema::dropIfExists('qAndA');
    }
}
