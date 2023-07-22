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
        Schema::create('user_follow', function (Blueprint $table) {
			$table->bigIncrements('id');
			//外部キー制約
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			$table->foreignId('follow_id')->constrained('users')->onDelete('cascade');
			$table->timestamps();
			//組み合わせダブり禁止
			$table->unique(['user_id', 'follow_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_follow');
    }
};
