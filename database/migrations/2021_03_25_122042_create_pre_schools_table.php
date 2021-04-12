<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePreSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_schools', function (Blueprint $table) {
            $table->id();
            $table->string('main_img')->nullable();
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
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'Dynamic, Compassionate and Connected Learners',
            'content1' => 'With a focus on curiosity-driven exploration, our Early Learning Program (Preschool 3 and 4 year olds) provides the perfect opportunity for a lifetime of learning to begin.
                            Our Early Learning Program provides a “hands on,” safe and nurturing learning environment where compassion, resilience and a growth mindset is celebrated. Our main objective is to foster a love of learning through the implementation of an inquiry-based, developmentally-appropriate and exciting early childhood curriculum for three, four and five years olds.',
            'title2' => 'Explore Our Play-Based Early Years Curriculum',
            'content2' => 'Our inquiry-based Early Learning Program is driven by our belief that all students are curious, creative, and capable. Framed by the IB Primary Years Program (PYP) and Creative Curriculum, we provide for an inquiry-based, concept-driven, and transdisciplinary approach to teaching and learning.

Within the PYP framework, play-based learning allows children to lay the foundation for their cognitive, social, emotional, physical and brain development.

Through play-based learning, our students develop attributes of the IB Learner Profile by collaborating, making judgements, learning how to learn, and becoming increasingly autonomous with the support of involved educators who understand the educational potential of play.',
            'link1' => 'https://bloombreedschools.educare.school/admission-form',
            'pic1' => '',
            'pic1_title' => 'A Community of Readers',
            'pic1_content' => 'The EYFS Library Program introduces our littlest rams to our dynamic, balanced and connected learning space. Reading for choice, love and learning is the focus of this space.

Lessons are guided by the teacher librarian and constructed in collaboration with our EYFS teachers and the PYP coordinator to ensure relevancy to classroom learning. Students are encouraged to develop a love of reading as they learn how to use and utilize our beautiful library.',
            'pic2' => '',
            'pic2_title' => 'Experiential Learning',
            'pic2_content' => 'At BMS, some of the best learning takes place beyond the classroom walls. We leverage our local and community relationships to enrich student learning opportunities.

During the PYP Units of Inquiry, students explore both their home and host cultures to gain a deeper understanding of themselves and the world around them. Students participate in a range of field trips which provide authentic connections to the local culture. ',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];

        DB::table('pre_schools')->truncate();
        DB::table('pre_schools')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_schools');
    }
}
