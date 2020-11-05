<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('username', 255);
            $table->string('email')->unique();
            $table->string('image', 255)->nullable();
            $table->string('shortResume', 545)->nullable();
            $table->longText('contacts')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('templateID');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
