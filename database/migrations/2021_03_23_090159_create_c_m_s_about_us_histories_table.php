<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCMSAboutUsHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_m_s_about_us_histories', function (Blueprint $table) {
            $table->id();
            $table->string('main_img')->nullable();
            $table->string('title1')->nullable();
            $table->longText('bolded')->nullable();
            $table->longText('content1')->nullable();
            $table->string('title2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('title3')->nullable();
            $table->longText('content3')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'Honoring Our Heritage. Inspiring Bright Futures.',
            'bolded' => 'Established in 1998, Bloombreed Schools has grown from a burgeoning nursery and primary school into a vibrant co-educational, Day and Boarding High School. Our successful evolution has placed us in a distinct position to offer children smooth and stable transition in their academic journey as well as assuage every parent’s search for quality education.',
            'content1' => 'Bloombreed Schools is the brainchild of Mrs Olufunke Sunmonu, fondly called Big Auntie – a seasoned educationist, wife and mother with strong passion for qualitative education and the desire to inculcate the fear of God in children which inevitably transforms them into exemplary leaders.

From inception in 2007, the Boarding High School located at Boskel Road, off Aba Expressway, Port Harcourt, has committed itself to the provision of academic excellence, quality pastoral life, physical-mental synergy and spiritual-moral conduct that will position them to compete with their peers globally. We take pride in our superior infrastructure, peaceful and secure environment.

Slowly, but surely stepping up the improvement ladder, Bloombreed Schools is recognised for her state-of-the-art facilities, experienced and highly-dedicated instructors and professionally skilled leadership team. Our well-formidable team of experts together with the support of parent-clientele work hand-in-hand to provide an enviable learning oak for our students. Won’t you rather journey with us as we invite you to the most beneficial and educational world of experiences.',
            'title2' => 'INNOVATION AT BLOOMBREED SCHOOLS',
            'content2' => 'Bloombreed Schools, Port Harcourt – a British Council accredited independent, Christian, co-educational Day and Boarding School. The boarding school is located at the tranquil and secure Boskel Road, after Intels Bus Stop, Port Harcourt, while the Day School is located off NTA Road, Port Harcourt, Rivers State, Nigeria.

Every pupil/student is privy to an all-round educational development and practical exposure to real-life Situations on academics and life outside academics that enables pupils/students gain the necessary exposure to reach an elevated level of personal and professional success such that will also enable them transform their localities, the Nigeria nation and the world at large. Bloombreed Schools is poised with continuous innovation and world class standards in all areas of improvement.',
            'title3' => 'STAFFING',
            'content3' => 'Bloombreed Schools parades academic and non-academic staff with strong passion for qualitative education and the desire for continuous acquisition of knowledge; professionally and spiritually, inculcating the fear of God in each pupil/student, which inevitably transforms them into exemplary and morally sound leaders, equipped to thrive in their life’s journey and make positive impact on the society both nationally and globally.

',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];


        DB::table('c_m_s_about_us_histories')->truncate();
        DB::table('c_m_s_about_us_histories')->insert($default);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_m_s_about_us_histories');
    }
}
