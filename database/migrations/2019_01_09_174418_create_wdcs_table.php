<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWdcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wdcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('leader_name');
            $table->string('leader_phone');
            $table->string('leader_avatar')->default('avatar.jpg');
            $table->string('instance_name');
            $table->string('instance_address');

            $table->string('co_leader_name')->nullable();
            $table->string('co_leader_email')->nullable();
            $table->string('co_leader_phone')->nullable();
            $table->string('co_leader_avatar')->default('avatar.jpg');

            $table->string('member_name')->nullable();
            $table->string('member_email')->nullable();
            $table->string('member_phone')->nullable();
            $table->string('member_avatar')->default('avatar.jpg');
            $table->integer('progress')->default(1);
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
        Schema::dropIfExists('wdcs');
    }
}
