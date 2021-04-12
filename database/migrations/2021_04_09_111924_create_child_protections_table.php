<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateChildProtectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_protections', function (Blueprint $table) {
            $table->id();
            $table->string('main_img')->nullable();
            $table->string('title1')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('bolded')->nullable();
            $table->longText('content1')->nullable();
            $table->longText('title2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('title3')->nullable();
            $table->longText('content3')->nullable();
            $table->string('pic1')->nullable();
            $table->string('pic1_title')->nullable();
            $table->longText('pic1_content')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic2_title')->nullable();
            $table->longText('pic2_content')->nullable();
            $table->string('pic3')->nullable();
            $table->string('pic3_title')->nullable();
            $table->longText('pic3_content')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title1' => 'CHILD PROTECTION',
            'subtitle' => '',
            'content1' => '',
            'title2' => '',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];

        DB::table('child_protections')->truncate();
        DB::table('child_protections')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_protections');
    }
}
