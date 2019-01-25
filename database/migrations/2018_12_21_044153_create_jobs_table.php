<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jb_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employer_id');
            $table->string('job_category_id');
            $table->string('exp_level_id');
            $table->integer('min_salary');
            $table->integer('max_salary');
            $table->string('description');
            $table->string('requirement');
            $table->string('benefits');
            $table->string('open_to');
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
        Schema::dropIfExists('jb_jobs');
    }
}
