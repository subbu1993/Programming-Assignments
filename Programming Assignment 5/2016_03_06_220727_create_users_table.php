<?php

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
          Schema::create('users',function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
		$table->integer('phone');
		$table->string('email');
		$table->string('address');
		$table->timestamp('last_login');
		$table->integer('review_sum');
		$table->integer('review_count');	
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
        //
    }
}
