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

            $table->string('name');
            $table->string('nationality')->nullable();
            $table->string('nric', 14)->nullable()->index()->unique();
            $table->string('passport', 9)->nullable()->index()->unique();
            $table->string('gender', 6)->nullable();
            $table->string('blood_group', 2);
            $table->date('date_of_birth')->nullable();
            $table->integer('user_id')->unsigned()->nullable()->references('id')->on('users');

            $table->unsignedInteger('created_by')->nullable()->default(null);
            $table->unsignedInteger('updated_by')->nullable()->default(null);
            $table->unsignedInteger('deleted_by')->nullable()->default(null);
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
