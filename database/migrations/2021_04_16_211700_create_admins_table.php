<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('profile')->nullable()->default('image/profiles/2.png');
            $table->string('password');
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('lang')->default('en');
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
        Schema::dropIfExists('admins');
    }
}
