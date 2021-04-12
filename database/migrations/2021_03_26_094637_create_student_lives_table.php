<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStudentLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_lives', function (Blueprint $table) {
            $table->id();
            $table->string('main_img')->nullable();
            $table->string('title1')->nullable();
            $table->longText('bolded')->nullable();
            $table->longText('content1')->nullable();
            $table->string('title2')->nullable();
            $table->string('sub_title2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('pic1')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic3')->nullable();
            $table->string('pic1_title')->nullable();
            $table->string('pic2_title')->nullable();
            $table->string('pic3_title')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'CULTIVATING CHARACTER AND BALANCE',
            'bolded' => 'As we look to the future, we understand the need for students to understand themselves and their strengths--for each student to have a sense of their own social and emotional wellbeing.',
            'content1' => 'We understand it’s going to be increasingly important for students to develop the skills of resilience and perseverance. There used to be a belief that schools could not teach character, that kids were born with a specific set of personalities and dispositions. Now, as we understand more how character develops, we know we can teach students how to be happy, how to embrace positive things in the world around them, and how to impact others in ways that are meaningful and engaging.',
            'title2' => 'A COMMITMENT TO CARE',
            'sub_title2' => 'Balance. Challenge. Support. ',
            'content2' => 'Our priority is to provide a safe, caring and healthy environment for every student.',
            'pic1' => '',
            'pic2' => '',
            'pic3' => '',
            'pic1_title' => 'CHILD PROTECTION',
            'pic2_title' => 'WELL BEING',
            'pic3_title' => 'COLLEGE COUNSELLING',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];

        DB::table('student_lives')->truncate();
        DB::table('student_lives')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_lives');
    }
}
