<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFrequentlyAskedQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequently_asked_questions', function (Blueprint $table) {
            $table->id();
            $table->longText('question')->nullable();
            $table->longText('answer')->nullable();
            $table->string('position')->nullable();
            $table->string('visibility')->nullable();
            $table->timestamps();
        });

        Model::unguard();

        $data = array();

        array_push($data, array(
            'id' => 1,
            'question' => 'If a student in class shows serious covid 19 symptoms after lunch during learning
class. Do we also quarantine the teacher in the class, or the whole class?',
            'answer' => 'Yes, everyone in contact with the suspect will be quarantined.',
            'position' => '1',
            'visibility' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));
        array_push($data, array(
            'id' => 2,
            'question' => 'How frequently do we test the temperature of teachers and students?',
            'answer' => 'Three times a day. Morning, Afternoon &amp; Evening.',
            'position' => '1',
            'visibility' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));
        array_push($data, array(
            'id' => 3,
            'question' => 'If given one more machine to test temperature, is it possible to test 20 x 4 classes
before lessons start at 8am?',
            'answer' => 'Yes. We have more than three thermometers.',
            'position' => '1',
            'visibility' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));
        array_push($data, array(
            'id' => 4,
            'question' => 'Who will test the temperature of the students?',
            'answer' => 'The school Nurse and trained staff.',
            'position' => '1',
            'visibility' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'id' => 5,
            'question' => 'Is the teaching and learning going to continue if we run out of sanitizers?',
            'answer' => 'Yes, washing of hands with soap is a better alternative.',
            'position' => '1',
            'visibility' => '1',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        DB::table('frequently_asked_questions')->truncate();
        DB::table('frequently_asked_questions')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frequently_asked_questions');
    }
}
