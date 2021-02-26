<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('enonce');
            $table->unsignedBigInteger('questionnaire_id');
            $table->unsignedBigInteger('rubrique_id');
            $table->timestamps();
        });

        Schema::table('questions', function (Blueprint $table){
            $table->foreign('questionnaire_id')->references('id')->on('questionnaires')->cascadeOnDelete();
            $table->foreign('rubrique_id')->references('id')->on('rubriques')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
