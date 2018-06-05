<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index()->unsigned()->nullable();
            $table->integer('post_id')->index()->unsigned()->nullable();
            $table->integer('photo_id')->index()->unsigned()->nullable();
            //$table->string('photo_id')->nullable();
            $table->integer('is_active')->default(0);
            $table->string('applicant');
            $table->string('address');
            $table->string('email');
            $table->text('body');
            $table->string('file');
            $table->date('created_at');
            $table->date('updated_at');

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
