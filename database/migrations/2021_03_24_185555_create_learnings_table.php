<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLearningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learnings', function (Blueprint $table) {
            $table->id();
            $table->string('main_title')->nullable();
            $table->longText('bolded_text')->nullable();
            $table->longText('content')->nullable();
            $table->string('pic1')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic3')->nullable();
            $table->string('pic4')->nullable();
            $table->string('title1');
            $table->longText('content1')->nullable();
            $table->string('title2');
            $table->longText('content2')->nullable();
            $table->string('title3');
            $table->longText('content3')->nullable();
            $table->string('title4');
            $table->longText('content4')->nullable();
            $table->string('main_title2')->nullable();
            $table->string('title5')->nullable();
            $table->longText('content5')->nullable();
            $table->string('pic5')->nullable();
            $table->string('pic6')->nullable();
            $table->string('pic7')->nullable();
            $table->string('pic5_title')->nullable();
            $table->string('pic6_title')->nullable();
            $table->string('pic7_title')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'main_title' => 'THE BMS DIFFERENCE',
            'bolded_text' => 'At BMS, success means more than just high grades. We strive to nurture the academic and emotional intelligence of our students, ensuring high levels of learning for all while encouraging each student to embrace their own personal potentials.',
            'content' => 'We’ve worked to develop and refine programs that are tailored to meet the needs of our students and crafted to balance British curriculum with an international perspective.

Our programs and systems are dynamic and driven by best-practice research. They are designed and taught by experienced educators who embrace change and embed technology in innovative ways. ',
            'title1' => 'EYFS',
            'title2' => 'ELEMENTARY',
            'title3' => 'MIDDLE SCHOOL',
            'title4' => 'HIGH SCHOOL',
            'content1' => 'With a focus on curiosity-driven exploration, our Early Learning program provides the perfect opportunity for a lifetime of learning to begin.',
            'content2' => 'Our Elementary School students experience high levels of innovation through a curriculum that balances challenge and rigor, with encouragement and support.',
            'content3' => 'Our Middle School program is a place for discovery and growth, where students are encouraged to take risks, try new things, and learn what their passions are in life.',
            'content4' => 'Our High School program provides a challenging academic curriculum to prepare students for the college that they feel is their best fit.',
            'main_title2' => 'BEYOND THE CLASSROOM WALLS',
            'title5' => 'Nurturing Dynamic, Compassionate & Connected Learners',
            'content5' => 'We design challenging and supportive educational experiences and environments to ensure our students are ready to lead successful, well-balanced, happy lives.',
            'pic5_title' => 'ARTS, ATHLETICS, ACTIVITIES',
            'pic6_title' => 'INNOVATION & TECHNOLOGY',
            'pic7_title' => 'COLLEGE COUNSELLING',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];

        DB::table('learnings')->truncate();
        DB::table('learnings')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learnings');
    }
}
