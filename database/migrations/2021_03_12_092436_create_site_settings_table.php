<?php

use App\SiteSettings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('school_email')->nullable();
            $table->string('school_phone1');
            $table->string('school_phone2')->nullable();
            $table->string('school_phone3')->nullable();
            $table->string('school_address1');
            $table->string('school_address2')->nullable();
            $table->string('school_logo')->nullable();
            $table->longText('quick_links')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->integer('copyright_year')->nullable();
            $table->timestamps();
        });

        Model::unguard();
//        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $defaultSettings = [
            [
                'id'             => 1,
                'school_name'           => 'Bloombreed Schools',
                'school_email'          => 'info@bloombreedschools.org',
                'school_phone1'       => '+234 703 904 7680',
                'school_phone2' => '+234 807 515 4825',
                'school_address1'   => 'Boskel Road, Off Port Harcourt/Aba Expressway, After Eleme junction Port Harcourt. , ',
                'school_address2'   => 'Opposite NTA, Off NTA-Choba Road Port-Harcourt',
                'school_logo' => 'images/logo.png',
                'quick_links'   => 'Inquire, Apply Now',
                'facebook'  => 'https://web.facebook.com/bloombreedschools.org/?_rdc=1&_rdr',
                'instagram' => 'https://www.instagram.com/bloombreedschools_day/',
                'twitter'   => 'https://twitter.com/bloombreeddayph?lang=en',
                'copyright_year' => '2020',

            ],
        ];

        DB::table('site_settings')->truncate();
        DB::table('site_settings')->insert($defaultSettings);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}
