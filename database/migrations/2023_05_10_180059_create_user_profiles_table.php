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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('account_type');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('job_title')->nullable();
            $table->text('skills')->nullable();
            $table->text('about')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();

            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreign('category_id')->on('categories')->references('id');
            $table->foreign('country_id')->on('countries')->references('id');
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
        Schema::dropIfExists('user_profiles');
    }
};
