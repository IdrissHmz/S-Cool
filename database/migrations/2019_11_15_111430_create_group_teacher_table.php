<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_teacher', function (Blueprint $table) {
            $table->bigInteger('teacher_code');
            $table->foreign('teacher_code')
                ->references('id')->on('teachers')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->bigInteger('group_code');
            $table->foreign('group_code')
                ->references('id')->on('groups')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->bigIncrements('id');
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
        Schema::dropIfExists('group_teacher');
    }
}
