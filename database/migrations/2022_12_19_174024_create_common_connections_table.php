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
        Schema::create('common_connections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('first_user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->foreignId('second_user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->foreignId('common_user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('common_connections');
    }
};
