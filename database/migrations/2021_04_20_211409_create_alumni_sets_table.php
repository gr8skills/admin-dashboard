<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_sets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->longText('content')->nullable();
            $table->string('main_img')->nullable();
            $table->string('active')->nullable(); //0=No, 1=Yes
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumni_sets');
    }
}
