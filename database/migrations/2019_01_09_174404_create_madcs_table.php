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
            $table->string('co_leader_name');
            $table->string('co_leader_email');
            $table->string('co_leader_phone');
            $table->string('co_leader_avatar')->default('avatar.jpg');
            $table->string('member_1_name');
            $table->string('member_1_email');
            $table->string('member_1_phone');
            $table->string('member_1_avatar')->default('avatar.jpg');
            $table->string('member_2_name');
            $table->string('member_2_email');
            $table->string('member_2_phone');
            $table->string('member_2_avatar')->default('avatar.jpg');
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
