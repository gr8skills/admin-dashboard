<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCMSIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_m_s_indices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('row1_title')->nullable();
            $table->string('row1_picture')->nullable();
            $table->string('row1_content')->nullable();
            $table->string('row2_pic1')->nullable();
            $table->string('row2_pic2')->nullable();
            $table->string('row2_pic3')->nullable();
            $table->string('row2_pic4')->nullable();
            $table->string('row2_title1')->nullable();
            $table->string('row2_title2')->nullable();
            $table->string('row2_title3')->nullable();
            $table->string('row2_title4')->nullable();
            $table->string('row2_content1')->nullable();
            $table->string('row2_content2')->nullable();
            $table->string('row2_content3')->nullable();
            $table->string('row2_content4')->nullable();
            $table->string('row3_title')->nullable();
            $table->string('row3_content')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Model::unguard();

        $defaultSettings = [
            [
                'id'             => 1,
                'row1_title'           => 'THE MOST INNOVATIVE SCHOOL IN PORT-HARCOURT',
                'row1_picture'          => 'https://resources.finalsite.net/videos/t_video_mp4_480/v1528700394/aisgzorg/ptsyn3asivaacxibfwxf/AISG-InspiringBrightFutures-2-720p.mp4',
                'row1_content'       => 'Established in 1998, Bloombreed Schools has grown from a burgeoning nursery and primary school into a vibrant co-educational, Day and Boarding High School. Our successful evolution has placed us in a distinct position to offer children smooth and stable transition in their academic journey as well as assuage every parent’s search for quality education.',
                'row2_pic1' => 'r2p1.png',
                'row2_pic2'   => 'r2p2.png',
                'row2_pic3'   => 'r2p3.png',
                'row2_pic4' => 'r2p4.png',
                'row2_title1'   => 'EYFS',
                'row2_title2'   => 'ELEMENTARY',
                'row2_title3'   => 'MIDDLE SCHOOL',
                'row2_title4'   => 'HIGH SCHOOL',
                'row2_content1'   => 'With a focus on curiosity-driven exploration, our Early Learning program provides the perfect opportunity for a lifetime of learning to begin.',
                'row2_content2'   => 'Our Elementary School students experience high levels of innovation through a curriculum that balances challenge and rigor, with encouragement and support.',
                'row2_content3'   => 'Our Middle School program is a place for discovery and growth, where students are encouraged to take risks, try new things, and learn what their passions are in life.',
                'row2_content4'   => 'Our High School program provides a challenging academic curriculum to prepare students for the college that they feel is their best fit.',
                'row3_title'   => 'A Vibrant and Diverse Community',
                'row3_content'   => 'Our students are guided by faculty who challenge them to achieve, nurtured in an environment where creativity and inquiry are celebrated, and supported by a community who understands the power of a growth mindset.',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

            ],
        ];

        DB::table('c_m_s_indices')->truncate();
        DB::table('c_m_s_indices')->insert($defaultSettings);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_m_s_indices');
    }
}
