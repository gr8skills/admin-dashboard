<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable();
            $table->longText('content1')->nullable();
            $table->string('link_ask_a_question')->nullable();
            $table->string('image1')->nullable();
            $table->string('image1_title')->nullable();
            $table->longText('image1_content')->nullable();
            $table->string('image1_link')->nullable();
            $table->string('image2')->nullable();
            $table->string('image2_title')->nullable();
            $table->longText('image2_content')->nullable();
            $table->string('image2_link')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
          'id' => 1,
          'title1' => 'We are delighted you are considering Bloombreed Schools!',
          'content1' => 'At BMS, we understand choosing the next step in your child\'s learning journey will be one of the most important decisions you and your family will make. We are highly invested in admitting new families and students who believe in our culture of community, academic rigor, and whole-child development. 

We encourage every new family to connect with us before beginning the application process. This allows us to better understand the needs of your family as we guide you through the admissions process. 

PLEASE NOTE: If you are interested in visiting an BMS campus, please proceed below to the Book a Tour section. Do not click the Ask a Question button in this section.

We are looking forward to hearing from you and will respond within 2-3 Working Days.',
            'link_ask_a_question' => 'https://bloombreedschools.educare.school/enquiry',
            'image1'=>'',
            'image1_title' => 'Admissions Process',
            'image1_content' => 'We want to make applying to BMS a simple and stress free process for you. Our priority is to help you make the right decisions for you and your family.',
            'image1_link' => 'https://bloombreedschools.educare.school/admission-form',
            'image2' => '',
            'image2_title' => 'Book a Tour',
            'image2_content' => 'Prior to each tour, we spend time getting to know you and your child so that we can better understand your key questions, needs, interests and concerns.',
            'image2_link' => 'https://bloombreedschools.educare.school/enquiry',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ];

        DB::table('admissions')->truncate();
        DB::table('admissions')->insert($default);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
