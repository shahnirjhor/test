<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerFormSubmittedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_form_submitteds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('career_name');
            $table->string('email');
            $table->string('phone');
            $table->bigInteger('experience')->unsigned();
            $table->string('biodata');
            $table->string('status');
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
        Schema::dropIfExists('career_form_submitteds');
    }
}
