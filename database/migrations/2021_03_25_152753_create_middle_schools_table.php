<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMiddleSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('middle_schools', function (Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable();
            $table->longText('bolded')->nullable();
            $table->longText('content1')->nullable();
            $table->string('pic1')->nullable();
            $table->string('pic1_title')->nullable();
            $table->longText('pic1_content')->nullable();
            $table->string('link1')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic2_title')->nullable();
            $table->string('pic2_subtitle')->nullable();
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
            'bolded' => 'BMS Middle School (Grades 6 - 8) is a place for discovery and growth, where students are encouraged to take risks, try new things, and learn what their passions are in life.',
            'content1' => 'We place a high emphasis on student choice and challenge, offering your child authentic, real-world learning experiences while fostering a commitment to global awareness.

Our Middle School program is designed to address the unique academic, artistic, physical, creative, and emotional development needs of 6th, 7th, and 8th grade students. Through a carefully designed structure at each grade level, we provide a developmentally appropriate transition to ensure your child experiences a relevant and exploratory curriculum in a climate of high expectations.',
            'pic1' => '',
            'pic1_title' => 'Explore Our Curriculum',
            'pic1_content' => 'Our Grade 6-8 program offers a challenging academic curriculum which fosters exploration, critical thinking, and innovative learning. Our framework is geared towards creating dynamic, compassionate, and connected learners.

Our curriculum is based on AERO and Common Core standards and is tailored to our unique context and learners. Common Core and AERO are standards widely adopted by international schools. For families transitioning between schools, this offers a sense of familiarity and provides consistency in your child’s education.

We believe our students should be active participants in their own learning with the expectation that they become independent and reflective of the world around them. To complement our framework, a variety of student support and extracurricular programs are offered to enrich the Middle School journey.',
            'link1' => 'https://bloombreedschools.educare.school/admission-form',
            'pic2' => '',
            'pic2_title' => 'TARGET and Discovery',
            'pic2_subtitle' => 'The TARGET and Discovery programs are powerful and engaging supplements to our core curriculum.',
            'pic2_content' => 'TARGET (Teen, Action, Reflection, Growth, Exploration, Teamwork)
TARGET, our Middle School advisory program, aims to meet the needs of young adolescents by providing structured guidance and support.

The TARGET program seeks to create a sense of belonging and promotes a positive self-image to ensure that each student is connected and advocated for.

Discovery Program
The Discovery Program is an extensive electives program in which students have the opportunity to pursue new areas of interest in a low risk, low pressure environment.

The Discovery Program is agile in design and exploratory by nature, enabling Middle School students to try something new outside of the usual curricular framework.',

            'pic3' => '',
            'pic3_title' => 'Experiential Learning',
            'pic3_content' => 'We provide students with creative and differentiated learning experiences throughout our middle school program to ensure your child achieves personal excellence through a variety of thoughtfully planned experiential opportunities.

From working alongside local, national, and international organizations to experiencing the richness our host country has to offer through our China trips, our Middle School students enjoy meaningful learning.',
            'title3' => 'Support Services',
            'content3' => 'BMS offers additional support services for students who demonstrate mild learning differences. Our English as an Additional Language Program (EAL) is designed to assist students to engage with  the curriculum and achieve academic success. Students in the program receive extra  language support in the regular classroom using the inclusion model of  EAL support. 

Our Learning Support Program combines in class support, small group instruction and individual targeted support for students identified as needing additional interventions. The overall  goal  of  the  Learning Support  Program  is  to develop the academic skills of students  with  learning  needs so  they  can  develop into  successful  and  independent  learners.',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            ];

        DB::table('middle_schools')->truncate();
        DB::table('middle_schools')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('middle_schools');
    }
}
