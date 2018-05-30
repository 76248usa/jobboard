<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('application_id')->index()->unsigned()->nullable();
            $table->integer('is_active')->default(0);
            $table->string('user_id');
            $table->string('email');
            $table->text('body');
            $table->timestamps();
            
            $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_replies');
    }
}
