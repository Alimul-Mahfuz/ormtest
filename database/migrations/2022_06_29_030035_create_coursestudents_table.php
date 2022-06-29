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
        Schema::create('coursestudents', function (Blueprint $table) {
            $table->id('cs_id');
            $table->unsignedBigInteger('s_id');
            $table->unsignedBigInteger('c_id');
            $table->foreign('s_id')->references('student_id')->on('students')
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
        Schema::dropIfExists('coursestudent');
    }
};
