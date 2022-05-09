<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('user_role',['user','customer','employee','admin','master']);
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // $table->string('branch_name');
            // $table->string('industry_id');
            $table->string('description');
            $table->string('address');
            $table->string('employees_total');
            // $table->string('established_in');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            // $table->string('country_state');
            // $table->string('city_state');
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
};
