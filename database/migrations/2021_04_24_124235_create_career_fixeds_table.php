<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCareerFixedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_fixeds', function (Blueprint $table) {
            $table->id();
            $table->longText('bold')->nullable();
            $table->longText('sub')->nullable();
            $table->string('pic')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'bold' => 'At Bloombreed, we believe that relationships are the foundation of everything we do. ',
            'sub' => 'As a result, we are committed to finding educators who are not only strong in pedagogy and teaching skills but also invested in the relationships they nurture with students, colleagues, and other Bloombreed community members. If this sounds like you, we invite you to check out our current employment opportunities below!',
            'pic' => '',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];


        DB::table('career_fixeds')->truncate();
        DB::table('career_fixeds')->insert($default);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_fixeds');
    }
}
