<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  	Schema::create('libraries',function (Blueprint $table) {
                
                $table->increments('id');
		$table->integer('user_id');
		$table->integer('book_id');
		$table->string('status');
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
