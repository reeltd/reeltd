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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phonenumber')->nullable();
            $table->string('accountstatus')->nullable(); /** public, private, locked, active, online */
            $table->string('status')->nullable();
            $table->string('bio')->nullable();
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();
            $table->string('ipaddr')->nullable();
            $table->string('photo')->default('user.png');
            $table->string('access')->nullable();
            $table->rememberToken();
            $table->string('lastseen')->nullable();
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
