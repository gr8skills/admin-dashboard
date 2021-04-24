<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable(); //1. pre & Elementary, 2. Middle & High, 3. Supporting Staff
            $table->string('job_title')->nullable();
            $table->string('job_link')->nullable();
            $table->string('visibility')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'category' => 'middle_high',
            'job_title' => '',
            'job_link' => '',
            'visibility' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];


        DB::table('careers')->truncate();
        DB::table('careers')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
