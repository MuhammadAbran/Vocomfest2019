<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMadcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('leader_name');
            $table->string('leader_phone');
            $table->string('leader_avatar')->default('avatar.jpg');
            $table->string('instance_name');
            $table->string('instance_address');
            $table->string('coleader_name');
            $table->string('coleader_email');
            $table->string('coleader_phone');
            $table->string('coleader_avatar')->default('avatar.jpg');
            $table->string('member1_name');
            $table->string('member1_email');
            $table->string('member1_phone');
            $table->string('member1_avatar')->default('avatar.jpg');
            $table->string('member2_name');
            $table->string('member2_email');
            $table->string('member2_phone');
            $table->string('member2_avatar')->default('avatar.jpg');
            $table->integer('progress');
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('madcs');
    }
}
