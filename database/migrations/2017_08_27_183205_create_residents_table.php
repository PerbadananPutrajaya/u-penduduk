<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name', 64);
            $table->string('last_name', 64);
            $table->string('nationality');
            $table->string('nric', 14);
            $table->string('passport', 9);
            $table->string('gender', 6);
            $table->date('date_of_birth');
            $table->integer('user_id')->unsigned()->nullable()->references('id')->on('users');

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
        Schema::table('residents', function (Blueprint $table) {
            Schema::dropIfExists('residents');
        });
    }
}
