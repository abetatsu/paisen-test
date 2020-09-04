<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviousJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_job', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('senior_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('senior_id')->references('id')->on('seniors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('previous_job');
    }
}
