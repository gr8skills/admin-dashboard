<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveSettingToSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_settings', function (Blueprint $table) {
            //
        });

        if (!Schema::hasColumn('site_settings', 'active_setting')) {
            Schema::table('site_settings', function (Blueprint $table) {
                $table->integer('active_setting')->after('copyright_year')->default(0);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('site_settings', 'active_setting')) {
            Schema::table('site_settings', function (Blueprint $table) {
                $table->dropColumn('active_setting');
            });
        }
    }
}
