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
        Schema::create('courseteachers', function (Blueprint $table) {
            $table->id('ct_id');
            $table->unsignedBigInteger('t_id');
            $table->unsignedBigInteger('c_id');
            $table->foreign('t_id')->references('teacher_id')->on('teachers')
                ->onDelete('cascade');
            $table->foreign('c_id')->references('course_id')->on('courses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courseteacher');
    }
};
