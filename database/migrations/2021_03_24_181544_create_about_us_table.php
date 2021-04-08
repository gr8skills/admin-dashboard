<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('img1')->nullable();
            $table->string('main_title')->nullable();
            $table->string('sub_main_title')->nullable();
            $table->string('title')->nullable();
            $table->longText('content1')->nullable();
            $table->string('why_bms')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'main_title' => 'A FUTURE-READY',
            'sub_main_title' => 'LEARNING COMMUNITY',
            'title' => 'Our mission is one that places great importance on the concept of being “future-ready.”',
            'content1' => 'BMS exists solely to “nurture future-ready individuals to aspire, achieve, and contribute.” We prepare our students by equipping them with 21st Century innovation skills, with an explicit focus on creativity, critical thinking, communication, collaboration, and resilience. It’s important for students to be equipped with the skills they need to thrive in an ever-changing environment. 

When the future looks so very different from what it is today, being prepared for it requires forward thinking and a robust understanding of current trends in a multitude of different areas. What impact will technology have on schooling? What impact will the future of employment have on education? Just how will we prepare balanced global citizens with compassionate hearts in an increasingly stressful, secular, internationalized, technology-driven and fast changing world?

Our ambition is to offer the kind of learning that will prepare each student for his or her future.',
            'why_bms' => 'We strive to design educational experiences and environments that will ensure our students are ready to lead successful, well-balanced, happy lives.',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ];

        DB::table('about_us')->truncate();
        DB::table('about_us')->insert($default);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us');
    }
}
