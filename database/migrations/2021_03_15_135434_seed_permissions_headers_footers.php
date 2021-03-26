<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SeedPermissionsHeadersFooters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Model::unguard();
        $data = array();

//        array_push($data, array(
//            'id'         => '17',
//            'title'      => 'settings_access',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '18',
//            'title'      => 'settings_edit',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '19',
//            'title'      => 'settings_store',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '20',
//            'title'      => 'settings_access',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        //main menu
//        array_push($data, array(
//            'id'         => '21',
//            'title'      => 'mainMenu_access',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '22',
//            'title'      => 'mainMenu_create',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '23',
//            'title'      => 'mainMenu_edit',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '24',
//            'title'      => 'mainMenu_show',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '25',
//            'title'      => 'mainMenu_delete',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        //slider
//        array_push($data, array(
//            'id'         => '26',
//            'title'      => 'slider_edit',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '27',
//            'title'      => 'slider_create',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '28',
//            'title'      => 'slider_delete',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '29',
//            'title'      => 'slider_show',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));
//
//        array_push($data, array(
//            'id'         => '30',
//            'title'      => 'slider_access',
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ));



        DB::table('permissions')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
