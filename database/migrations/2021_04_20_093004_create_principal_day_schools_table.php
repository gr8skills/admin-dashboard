<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalDaySchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principal_day_schools', function (Blueprint $table) {
            $table->id();
            $table->string('img1')->nullable();
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->string('principal_image')->nullable();
            $table->timestamps();
        });

        Model::unguard();

        $defaultSettings = [
            [
                'id'             => 1,
                'title'           => 'A Vibrant, Dynamic, and Innovative School',
                'content'          => 'A Future-Ready Focus

Our vibrant school community is committed to preparing students for the future they choose. While we don’t have a crystal ball to know with certainty what the future will bring, we’re fully engaged in discerning the projections as to what knowledge, skills, and dispositions our students will need in order to thrive in an ever-changing world.

Our vision for dynamic, compassionate, and connected learning is a vision for an improved learning experience for all students. It compels us to plan for and implement research-based, personalized learning that will ensure our students graduate ready to utilize their individual talents and pursue their dreams throughout their lives. Our student-centered approach leverages technology and provides creative and differentiated learning opportunities to ensure all learners achieve personal excellence.  It provides a balance of challenge and rigor with encouragement and support. 

We value open and clear communication so do not hesitate to contact us to answer any questions that you may have. We\'d be delighted to share more about our school with you.

Kind regards,

GANA EMMANUEL
Principal (Day School)',
                'principal_image'       => '',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

            ],
        ];

        DB::table('principal_day_schools')->truncate();
        DB::table('principal_day_schools')->insert($defaultSettings);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('principal_day_schools');
    }
}
