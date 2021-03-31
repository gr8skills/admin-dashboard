<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMainMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link')->nullable();
            $table->string('alias')->nullable();
            $table->longText('submenu')->nullable();
            $table->integer('visibility')->default(1)->nullable();
            $table->integer('position')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Model::unguard();
        $data = array();

        array_push($data, array(
            'id' => 1,
            'name' => 'ABOUT US',
            'submenu' => 'PRINCIPAL WELCOME=https://bloombreedschools.org/directors-welcome.html,OUR HISTORY=https://bloombreedschools.org/our-history.html,OUR MISSION AND VISION=https://bloombreedschools.org/our-mission-and-vision.html,LEADERSHIP=https://bloombreedschools.org/leadership.html',
            'link' => 'https://bloombreedschools.org/about-us.html',
            'visibility' => '1',
            'position' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'id' => 2,
            'name' => 'ADMISSIONS',
            'submenu' => '',
            'link' => 'https://bloombreedschools.org/admissions.html',
            'visibility' => '1',
            'position' => '2',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'id' => 3,
            'name' => 'LEARNING',
            'submenu' => 'PRESCHOOL=https://bloombreedschools.org/preschool.html,ELEMENTARY SCHOOL=https://bloombreedschools.org/es.html,MIDDLE SCHOOL=https://bloombreedschools.org/middle-school.html,HIGH SCHOOL=https://bloombreedschools.org/high-school.html,THE INNOVATION INITIATIVE=https://bloombreedschools.org/the-innovation-initiative.html',
            'link' => 'https://bloombreedschools.org/learning.html',
            'visibility' => '1',
            'position' => '3',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'id' => 4,
            'name' => 'STUDENT LIFE',
            'submenu' => '',
            'link' => 'https://bloombreedschools.org/student-life.html',
            'visibility' => '1',
            'position' => '4',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'id' => 5,
            'name' => 'CHILD PROTECTION',
            'submenu' => '',
            'link' => 'https://bloombreedschools.org/child-protection.html',
            'visibility' => '1',
            'position' => '5',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'id' => 6,
            'name' => 'BLOOMBREED EMIS',
            'submenu' => '',
            'link' => 'http://bloombreedschools.vm-host.net/',
            'visibility' => '1',
            'position' => '6',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));


        DB::table('main_menus')->truncate();
        DB::table('main_menus')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_menus');
    }
}
