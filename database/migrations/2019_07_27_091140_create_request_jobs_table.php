<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('agree');
            $table->integer('phone');
            $table->integer('nationality');
            $table->string('certificates');
            $table->text('experience');
            $table->integer('governorate');
            $table->string('area');
            $table->integer('expected_salary');
            $table->text('note');
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
        Schema::dropIfExists('request_jobs');
    }
}
