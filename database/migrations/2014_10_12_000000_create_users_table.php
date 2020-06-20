<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('password');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('phonenumber');

            $table->string('restaurant_name');
            $table->string('address');
            $table->string('postalcode');
            $table->string('region');
            $table->bigInteger('phonenumber-rest');
            $table->string('chamber-of-commerce');

            $table->boolean('checkbox-1');
            $table->boolean('checkbox-2');
            $table->boolean('checkbox-3');
            $table->boolean('checkbox-4');
            $table->boolean('checkbox-5');

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