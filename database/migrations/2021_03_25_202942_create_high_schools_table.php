<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHighSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('high_schools', function (Blueprint $table) {
            $table->id();
            $table->string('main_img')->nullable();
            $table->string('title1')->nullable();
            $table->longText('bolded')->nullable();
            $table->longText('content1')->nullable();
            $table->string('title2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('link')->nullable();
            $table->string('pic1')->nullable();
            $table->string('pic1_title')->nullable();
            $table->longText('pic1_content')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic2_title')->nullable();
            $table->longText('pic2_content')->nullable();
            $table->string('pic3')->nullable();
            $table->string('pic3_title')->nullable();
            $table->longText('pic3_content')->nullable();
            $table->string('title3')->nullable();
            $table->longText('content3')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'Dynamic, Compassionate and Connected Learners',
            'bolded' => 'The BMS High School program (Grades 9 - 12) is designed to provide a broad exposure to a balance of academic disciplines and co-curricular activities to facilitate the development of well-rounded, self-directed, and enthusiastic learners.',
            'content1' => 'A cornerstone of the BMS experience is the desire to provide students with opportunity. In the High School, this is especially true as students are given the opportunity to tailor a program that will culminate in preparing them for the university or college that they feel is their best fit.',
            'title2' => 'Explore Our Curriculum',
            'content2' => 'Our High School program offers a challenging academic curriculum which fosters exploration, critical thinking, and innovative learning while also best preparing students for success in the International Baccalaureate Diploma Programme (IBDP) in the final two years. Our framework is geared towards creating dynamic, compassionate, and connected learners.

Our Grades 9 and 10 curriculum is based on AERO and Common Core standards while in Grades 11 and 12 we follow the IBDP. Interested students may choose to pursue a full IBDP Diploma in addition to the AISG High School Diploma by studying an IBO-prescribed program of study and co-curricular involvement. The IB Diploma is recognized by the world’s top universities as excellent preparation for tertiary education.

Our challenging program is academically broad and complemented by a variety of student support and extracurricular programs to develop successful students in this next step of their journey.',
            'link' => 'https://bloombreedschools.educare.school/admission-form',
            'pic1' => '',
            'pic1_title' => 'BMS\'s High School Diploma',
            'pic1_content' => 'Our 75 graduates from the Class of 2018 have received offers from more than 107 universities around the world and will be attending over 40 top universities in more than 13 countries! 

The Class of 2018 graduates have received acceptances to top universities around the world in various subjects and fields including Computer Science, Engineering, Economics, Business and Commerce, Sports Management, Drama, Arts, Media, and many more.

',
            'pic2' => '',
            'pic2_title' => 'Experiential Learning',
            'pic2_content' => 'We provide students with creative and differentiated learning experiences throughout our high school programs to ensure your child achieves personal excellence through a variety of thoughtfully planned experiential opportunities.

From working alongside local, national, and international organizations to experiencing the richness our host country has to offer through our foreign trips, our students enjoy meaningful learning to enhance the BMS experience.',
            'pic3' => '',
            'pic3_title' => 'Library Space',
            'pic3_content' => 'Our staff is endlessly devoted to encouraging the love of reading. The library hosts lunchtime book club meetings for students and sponsors multiple teams in the annual Battle of the Books regional competition. Working closely with teachers, our librarian integrates information literacy skills into the curriculum to facilitate meaningful learning experiences for all.',
            'title3' => 'Support Services',
            'content3' => 'BMS offers additional support services for students who demonstrate mild learning needs. For Grades 9 and 10, our English as an Additional Language Program (EAL) is designed to assist students to engage with the curriculum and achieve academic success. By Grades 11 and 12 we expect all students to be proficient in English in order to be successful in the International Baccalaureate Programme. 

Our Learning Support Program combines in-class support, small group instruction and individual targeted support for students identified as needing additional interventions. The overall  goal  of  the  Learning Support  Program  is  to develop the academic skills of students  with  learning  needs so they can develop into  successful  and  independent  learners.',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            ];

        DB::table('high_schools')->truncate();
        DB::table('high_schools')->insert($default);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('high_schools');
    }
}
