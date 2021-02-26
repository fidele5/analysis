<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssertionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assertions', function (Blueprint $table) {
            $table->id();
            $table->string('texte');
            $table->unsignedBigInteger('question_id');
            $table->timestamps();
        });

        Schema::table('assertions', function (Blueprint $table){
            $table->foreign('question_id')->references('id')->on('questions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assertions');
    }
}
