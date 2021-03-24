<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCMSAboutUsMissionVisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_m_s_about_us_mission_visions', function (Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable();
            $table->longText('content1')->nullable();
            $table->longText('mission')->nullable();
            $table->longText('vision')->nullable();
            $table->string('title2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('image_title1')->nullable();
            $table->string('image1')->nullable();
            $table->longText('image_content1')->nullable();
            $table->string('image_title2')->nullable();
            $table->string('image2')->nullable();
            $table->longText('image_content2')->nullable();
            $table->string('image_title3')->nullable();
            $table->string('image3')->nullable();
            $table->longText('image_content3')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'Alive and well at BMS is a shared desire for our great school to be an even greater one.',
            'content1' => 'From our volunteer board members, to our dedicated faculty, to our supportive parents, to our hard-working students, there is a sense of connection and community. We all work together to continually improve BMS--to make it the best that it can be.',
            'mission' => 'Providing opportunity for every child to access first class education that: 

Supports the development of individual talent and skill;
Instilling a yearning for knowledge in each child which will be satisfied by our team of highly qualified and dedicated educators;
Inculcate high moral values in each child and
Treat every child as unique and as a potential genius.',
            'vision' => 'To develop every aspect of the child to enable them to reach an elevated level of personal and professional success that will contribute to the transformation of their localities, the Nigerian nation and the world at large. ',
            'title2' => 'What Does Our Vision Require?',
            'content2' => 'As a leading international school, BMS\'s bold and transformative projects will inspire both local and global communities.',
            'image_title1' => 'DYNAMIC',
            'image_content1' => 'Dynamic learning is designed and delivered by innovative educators who embrace change and share best practice instructional strategies. Technology and its responsible use is deeply embedded into learning.

Dynamic learning provides creative and differentiated learning opportunities to ensure all learners achieve personal excellence.

Dynamic learning starts with a vibrant school committed to preparing students for the future they choose. At the same time, BMS is constantly learning and adapting to an ever-changing environment.

Dynamic learning promotes inquiry, allowing for student choice and flexibility in the pursuit of their passions and interests, extending beyond the classroom to authentic, real world challenges and opportunities.',
            'image_title2' => 'COMPASSIONATE',
            'image_content2' => 'Compassionate learning starts with an inclusive organization that fosters an appreciation of common humanity and a commitment to care for others.

Compassionate learning balances challenge and rigor with encouragement and support. Empathy, resilience and growth mindset are continuously nurtured.

Compassionate learning advocates for global awareness, intercultural understanding, and perspective.

Compassionate learning cultivates strong character, social and emotional wellness, and personal happiness.',
            'image_title3' => 'CONNECTED',
            'image_content3' => 'Connected learning places relationships at the heart of the school, in pursuit of strong relationships within local, national, and global communities.

Connected learning demands strong collaboration and communication within and across multiple partnerships and communities.

Connected learning emphasizes the importance of student voice and ideas. Each member of the BMS community actively knows, values, and advocates for one another.

Connected learning inspires a unified, positive, and vibrant school spirit.',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

        ];

        DB::table('c_m_s_about_us_mission_visions')->truncate();
        DB::table('c_m_s_about_us_mission_visions')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_m_s_about_us_mission_visions');
    }
}
