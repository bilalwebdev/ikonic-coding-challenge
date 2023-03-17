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
        Schema::create('user_connections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->foreignId('receiver_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->tinyInteger('status')->default(0)->comment("1=>recieved,2=>send,3=>accepted",);
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
        Schema::dropIfExists('user_connections');
    }
};
