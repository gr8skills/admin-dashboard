<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateInnovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovations', function (Blueprint $table) {
            $table->id();
            $table->string('main_img')->nullable();
            $table->string('title1')->nullable();
            $table->longText('bolded')->nullable();
            $table->longText('content1')->nullable();
            $table->string('pic1')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'BMS\'S INNOVATION INITIATIVE',
            'bolded' => 'At BMS, we place an emphasis on using technology for creation over consumption. By giving students agency in their learning and promoting a maker’s mindset, teachers ensure every student is an empowered creator.',
            'content1' => 'Student creation is at the center of what we believe technology and innovation are about at BMS. We strive not only to prepare students with 21st-century skills, but to give them the tools and understanding to synthesize and share what they are learning outside of the classroom. We use cutting-edge technologies and resources that are supported by the most current research in innovative education. We take a student-centered approach to using technology to foster future-ready individuals.

One of our core beliefs is that student work should be shared with the outside world. This is achieved through community events, blogs, social media, and connecting with experts around the globe.

Supported by the most recent educational technology and innovation research, we have invested in a variety of technologies that support student learning. In 2008, BMS lead best practice through our shift to technology integration by adopting 1:1 iPads in elementary and 1:1 laptops in middle and high school. In 2016, to meet the changing landscape of technology, we embarked on an Innovation Initiative. This involved outfitting the campuses with 3D printers, agile furniture, laser cutters, robots, and two new dedicated Makerspaces for students to bring their ideas to life through making and designing.',
            'pic1' => '',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];
        DB::table('innovations')->truncate();
        DB::table('innovations')->insert($default);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('innovations');
    }
}
