<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateElementarySchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementary_schools', function (Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable();
            $table->longText('content1')->nullable();
            $table->string('title2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('link1')->nullable();
            $table->string('pic1')->nullable();
            $table->string('pic1_title')->nullable();
            $table->longText('pic1_content')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic2_title')->nullable();
            $table->longText('pic2_content')->nullable();
            $table->string('title3')->nullable();
            $table->longText('content3')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'Dynamic, Compassionate and Connected Learners',
            'content1' => 'Our elementary school (Grades K–5) provides a dynamic learning environment where students are encouraged to experience new things while building the foundational skills necessary for academic success.
Our rigorous program focuses on innovative practices that promote learning at deeper levels. Our elementary students experience a curriculum that encourages the creation of new things and the solving of real-world problems. Students are empowered to set goals, reflect on their learning, and take action. Creativity is developed as students are provoked to think deeper and share their learning in a variety of ways. ',
            'title2' => 'Explore Our IBPYP Curriculum',
            'content2' => 'Our inquiry-based Elementary School program provides a concept-driven, transdisciplinary approach to teaching and learning. Our teachers are committed to creating a dynamic environment which supports and promotes compassionate and connected learning.

Our curriculum, framed by the International Baccalaureate’s Primary Years Program (PYP), uses the AERO and Common Core standards to tailor a program most relevant to our unique context and learners. Within the PYP framework, we aim to develop inquiring, knowledgeable, and caring young people who help to create a better and more peaceful world through intercultural understanding and respect.

We believe our students should be active participants in their own learning with the expectation that they become independent and reflective of the world around them. A variety of student support and extracurricular programs are offered to enrich the Elementary School journey.

',
            'link1' => 'https://bloombreedschools.educare.school/admission-form',
            'pic1' => '',
            'pic1_title' => 'A Community of Readers',
            'pic1_content' => 'The Bloombreed Campus library is a dynamic, energetic, balanced, and connected learning space. It is a hub of creativity, and a place for quiet retreat. Reading for choice, love, and learning are the primary goals for this space, along with ensuring that students have the skills required to be informed digital citizens and researchers, capable of exploring their own independent inquiries. 

Lessons are guided by the teacher librarian and constructed in collaboration with our elementary school teachers and the PYP Coordinator to ensure relevancy to classroom learning. Students are encouraged to develop a love of reading as they begin to understand how to use and utilize a library space to benefit their learning needs.',
            'pic2' => '',
            'pic2_title' => 'Experiential Learning',
            'pic2_content' => 'At BMS, some of the best learning takes place beyond the classroom walls. We leverage our local and community relationships to enrich student learning opportunities.

During the PYP Units of Inquiry, students explore both their home and host cultures to gain a deeper understanding of themselves and the world around them. Students participate in a range of field trips which provide authentic connections to the local culture.

',
            'title3' => 'Support Services',
            'content3' => 'BMS offers additional support services for students who demonstrate mild learning needs. Our English as an Additional Language Program (EAL) is designed to assist students to engage with  the curriculum and achieve academic success. Students in the program receive extra language support in the regular classroom using the inclusion model of EAL support. 

Our Learning Support Program combines in class support, small group instruction and individual targeted support for students identified as needing additional interventions. The overall  goal  of  the  Learning Support  Program  is  to develop the academic skills of students  with  learning  needs so  they  can  develop into  successful  and  independent  learners. ',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            ];
        DB::table('elementary_schools')->truncate();
        DB::table('elementary_schools')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementary_schools');
    }
}
