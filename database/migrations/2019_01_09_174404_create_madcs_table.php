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
            $table->string('co-leader_name');
            $table->string('co-leader_email');
            $table->string('co-leader_phone');
            $table->string('co-leader_avatar')->default('avatar.jpg');
            $table->string('member-1_name');
            $table->string('member-1_email');
            $table->string('member-1_phone');
            $table->string('member-1_avatar')->default('avatar.jpg');
            $table->string('member-2_name');
            $table->string('member-2_email');
            $table->string('member-2_phone');
            $table->string('member-2_avatar')->default('avatar.jpg');
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
