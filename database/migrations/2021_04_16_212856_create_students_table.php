<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('profile')->nullable()->default('image/profiles/2.png');
            $table->string('school_id')->unique();
            $table->string('program')->nullable();
            $table->string('department')->nullable();
            $table->string('password');
            $table->string('date_of_birth')->nullable();
            $table->string('date_enrolled')->nullable();
            $table->string('gender')->nullable();
            $table->string('lang')->default('en');
            $table->boolean('suspended')->default(0);
            $table->boolean('dismissed')->default(0);
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
        Schema::dropIfExists('students');
    }
}
