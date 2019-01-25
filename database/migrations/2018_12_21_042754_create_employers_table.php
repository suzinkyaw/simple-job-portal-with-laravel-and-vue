<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jb_employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('company_name');
            $table->string('no_of_employee');
            $table->string('address', 255);
            $table->string('address2', 255);
            $table->string('tel1');
            $table->string('tel2');
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
        Schema::dropIfExists('jb_employers');
    }
}
