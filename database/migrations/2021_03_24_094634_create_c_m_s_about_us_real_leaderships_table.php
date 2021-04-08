<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCMSAboutUsRealLeadershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_m_s_about_us_real_leaderships', function (Blueprint $table) {
            $table->id();
            $table->string('main_image')->nullable();
            $table->string('title1')->nullable();
            $table->string('image1')->nullable();
            $table->string('image1_name')->nullable();
            $table->longText('image1_content')->nullable();
            $table->string('image2')->nullable();
            $table->string('image2_name')->nullable();
            $table->longText('image2_content')->nullable();
            $table->string('title2')->nullable();
            $table->longText('title2_content')->nullable();
            $table->string('title3')->nullable();
            $table->longText('title3_content')->nullable();
            $table->string('lImage1')->nullable();
            $table->string('lImage1_name')->nullable();
            $table->string('lImage1_unit')->nullable();
            $table->string('lImage2')->nullable();
            $table->string('lImage2_name')->nullable();
            $table->string('lImage2_unit')->nullable();
            $table->string('lImage3')->nullable();
            $table->string('lImage3_name')->nullable();
            $table->string('lImage3_unit')->nullable();
            $table->string('lImage4')->nullable();
            $table->string('lImage4_name')->nullable();
            $table->string('lImage4_unit')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'Delivering Exceptional Education',
            'image1_name' => 'AHMED KAMAL',
            'image1_content' => 'Ahmed Kamal is consummate educator with over 30 years of active involvement in Secondary Education at both the Public and Private levels.

Kamal holds a first degree in Business Education as well as a Master of Business Administration in Human Resources Management.

He started his teaching career with the Federal Ministry of Education in July 1986 at the Federal Government Girls’ College, Abuja. He moved from there to the Federal Government College, Sokoto in 1988. He joined the Federal Government programme for the Gifted and Talented Scholars -The Federal School for The Gifted, Suleja, Niger State in 1991. He moved from there to the Federal Technical College, Yaba, Lagos in 1995.

He made his foray into the private school space at Olashore International School, Iliko-Ijesha, Osun-State in September, 2000 as a Business Studies and Accounts Teacher for both the Nigerian and British Curricular turning out top-of-the-deck results in both IGCSE and WAEC examinations. He joined Thomas Adewumi International School, Oko, Kwara State as its pioneer Admissions and Public Relations Manager in 2004 to help launch its ‘A’ levels and University Foundation programmes. He returned to Olashore International School as Head of Administration in February, 2005 with back room support for teaching and learning enrichment. He joined the service of Marina Medical Services (HMO) Ltd as Head, Administration/HR between 2007 and 2009. He had brief stint with Castles Weekly Magazine as Administrator before returning to his familiar terrain as the Vice-Principal (Administration). He remained in that role until September, 2013.

Kamal was pioneer Vice-Principal at Lead-Forte Gate College Lagos where he has the mandate for Total Quality Assurance, Manpower Development and Pastoral Care up until August 2015 when he joined Shell Nigeria Exploration and Production as Subject Matter Expert on Education in the Social Performance Department.

As the Principal Bloombreed High School, Port Harcourt since September 2017, he has continued to work with his team of highly committed and vastly experienced professionals to push technology driven learning, strong moral upbringing, happiness and safety of every child in school as well developing the leadership potentials in every child.

Kamal is a member of the Nigerian Institute of Training and Development, Chartered Institute of Personnel Management of Nigeria and other Education related bodies.

He is married with children.',
            'image2_name' => 'BUNMI NWADIALOR',
            'image2_content' => 'Olubunmi Nwadialor is an astute educational administrator with over three decades experience in the education sector and has successfully functioned as a class teacher, EYFS Administrator, Head of Extra and Co-Curricular Committees, Head teacher and Head of Corporate affairs in high profile Nigerian Schools offering both the British and Nigerian Curriculum. She has championed many noble and noteworthy causes during her impressive stay in office.

She received her National Certificate of Education from Adeniran Ogunsanya College of Education, from the Lagos State University; bagged her Bachelor’s degree in Education and a Master’s degree in Educational Administration from the University of Lagos. Bunmi boasts of several professional affiliations and has facilitated several workshops related to childcare, teaching and learning, parenting and mentorship.

Bunmi, a God fearing, disciplined, and dedicated teacher and mother with an innate passion for children, is active in supporting and encouraging teachers through continuing education, staff development and leadership roles.

For the reason that education doesn’t end in the classrooms, Bunmi was a former coordinator of the Girls Guides and also responsible for activities such as the “Water Week” which emphasised the importance of healthy eating and drinking practices, “Professional Week” and many remarkable causes she advocated.

In her free time, Bunmi loves to catch-up with current happenings in education and politics, while sneaking in the occasional movie.

Realising that every child matters, Bunmi is able to relate effectively with people at all levels and of diverse backgrounds. She is a personal favourite of many of her “little” clients, pays attention to emotional and mental health and she makes sure that new pupils are welcomed in a way that is fit for kings and queens and has become customary',
            'title2' => 'Fostering Partnerships',
            'title2_content' => 'Our approach to leadership and board governance is one that fosters a partnership between the Board and school administrators. Adopting this approach ensures our goals are closely aligned so that, together, we are equipping the students of BMS with all the opportunities needed to reach their fullest potential.',
            'title3' => 'Leadership',
            'title3_content' => 'Leadership at Bloombreed Schools has oversight for all aspects of the school’s learning and operations.',
            'lImage1_name' => 'BUNMI NWADIALOR',
            'lImage1_unit' => 'Principal (Day)',

            'lImage2_name' => 'MATTHEW OGEDENGBE',
            'lImage2_unit' => 'VP Academics (Senior School)',


            'lImage3_name' => 'NWAKIBEA, FAVOUR I.',
            'lImage3_unit' => 'VP (Junior School)',


            'lImage4_name' => 'GLORIA OKOLIE',
            'lImage4_unit' => 'VP (Pastoral Care)',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];

        DB::table('c_m_s_about_us_real_leaderships')->truncate();
        DB::table('c_m_s_about_us_real_leaderships')->insert($default);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_m_s_about_us_real_leaderships');
    }
}
