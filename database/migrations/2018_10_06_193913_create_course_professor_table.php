<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_professor', function (Blueprint $table) {
            $table->mediumInteger('course_id')->unsigned();
            $table->smallInteger('professor_id')->unsigned();
            $table->tinyInteger('semester_id')->unsigned();
            $table->char('class', 2)->charset('latin1')->collation('latin1_general_ci');
            $table->tinyInteger('credit')->unsigned();

            $table->primary(['course_id', 'professor_id', 'semester_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_professor');
    }
}
