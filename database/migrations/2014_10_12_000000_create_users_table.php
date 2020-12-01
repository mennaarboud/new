<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('password');
            $table->string('contact');
            $table->string('address')->nullable();
            $table->integer('admtype_id')->default(2);
            $table->timestamps();
        });
        // DB::prepare("UPDATE `users` SET 'admtype_id' = 2");
        // DB::table('users')->insert(['admtype_id' => 2,'name' => '','email' => '','password' => '','contact' => '','address' => '']);
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
