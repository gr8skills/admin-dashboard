<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('main_img')->nullable();
            $table->string('title')->nullable();
            $table->longText('subtitle')->nullable();
            $table->longText('bolded')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
        });

        Model::unguard();
        $default = [
            'id' => 1,
            'title' => 'content',
            'subtitle' => 'We’re Happy to Hear From You',
            'bolded' => 'Please see the list below to better direct your questions or comments.',
            'content' => '<div class=" fsDiv fsStyleAutoclear" id="fsEl_1706">

				
	<div class="fsElement fsContent" id="fsEl_9011" data-use-new="true">

				<div class="fsElementContent">
			<h5 style="text-align: center;">We’re Happy to Hear From You</h5>

<p>&nbsp;</p>


	</div>


	</div>
	<div class="fsElement fsContent callout" id="fsEl_9081" data-use-new="true">

				<div class="fsElementContent">
			<p>Please see the list below to better direct your questions or comments.</p>


	</div>


	</div>
	<div class="fsElement fsContent" id="fsEl_9206" data-use-new="true">

				<div class="fsElementContent">
			<br>

	</div>


	</div>
	<div class="fsElement fsLayout fsTwoColumnLayout fsStyleAutoclear" id="fsEl_9169" data-use-new="true">

						<div class=" fsDiv fsStyleColumn fsStyleColumn-1 fsStyleAutoclear" id="fsEl_9170">

				<div class="fsElement fsContent" id="fsEl_9172" data-use-new="true">

				<div class="fsElementContent">
			<h5>Are you a prospective family?</h5>


	</div>


	</div>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-2 fsStyleColumn-last fsStyleAutoclear" id="fsEl_9171">

				<div class="fsElement fsContent" id="fsEl_9196" data-use-new="true">

				<div class="fsElementContent">
			<p><a class="fs_style_34" data-page-name="Contact Admissions" href="#" title="Contact Admissions">Contact info@bloombreedschools.org</a></p>


	</div>


	</div>




	</div>





	</div>
	<div class="fsElement fsLayout fsTwoColumnLayout fsStyleAutoclear" id="fsEl_9191" data-use-new="true">

						<div class=" fsDiv fsStyleColumn fsStyleColumn-1 fsStyleAutoclear" id="fsEl_9192">

				<div class="fsElement fsContent" id="fsEl_9197" data-use-new="true">

				<div class="fsElementContent">
			<h5>Are you a former student or employee?</h5>


	</div>


	</div>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-2 fsStyleColumn-last fsStyleAutoclear" id="fsEl_9194">

				<div class="fsElement fsContent" id="fsEl_9195" data-use-new="true">

				<div class="fsElementContent">
			<p><a class="fs_style_34" data-page-name="Contact Alumni Office" href="#" title="Contact Alumni ">Contact alumni@bloombreedschools.org</a></p>


	</div>


	</div>




	</div>





	</div>
	<div class="fsElement fsLayout fsTwoColumnLayout fsStyleAutoclear" id="fsEl_9175" data-use-new="true">

						<div class=" fsDiv fsStyleColumn fsStyleColumn-1 fsStyleAutoclear" id="fsEl_9176">

				<div class="fsElement fsContent" id="fsEl_9178" data-use-new="true">

				<div class="fsElementContent">
			<h5>Are you a prospective teacher?</h5>

<p>To apply for our open positions, please visit our <a data-page-name="Current Opportunities" href="#" title="Current Opportunitues">employment page</a>.</p>


	</div>


	</div>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-2 fsStyleColumn-last fsStyleAutoclear" id="fsEl_9177">

				<div class="fsElement fsContent" id="fsEl_9203" data-use-new="true">

				<div class="fsElementContent">
			<p><a class="fs_style_34" data-page-name="Contact Employment Office" href="#" title="Contact Human Resources">Contact teaching@bloombreedschools.org</a></p>


	</div>


	</div>




	</div>





	</div>
	<div class="fsElement fsLayout fsTwoColumnLayout fsStyleAutoclear" id="fsEl_9198" data-use-new="true">

						<div class=" fsDiv fsStyleColumn fsStyleColumn-1 fsStyleAutoclear" id="fsEl_9199">

				<div class="fsElement fsContent" id="fsEl_9205" data-use-new="true">

				<div class="fsElementContent">
			<h5>Are you a prospective partner, education colleague, or interested in finding out more about the school?</h5>


	</div>


	</div>




	</div>
	<div class=" fsDiv fsStyleColumn fsStyleColumn-2 fsStyleColumn-last fsStyleAutoclear" id="fsEl_9201">

				<div class="fsElement fsContent" id="fsEl_9202" data-use-new="true">

				<div class="fsElementContent">
			<p><a class="fs_style_34" data-page-name="Contact Communications Office" href="c#" title="Contact Communications">Contact communications@bloombreedschools.org</a></p>


	</div>


	</div>




	</div>





	</div>
	<!-- <div class="fsElement fsContent" id="fsEl_9053" data-use-new="true" >

				<div class="fsElementContent">
			<p>&nbsp;</p>

<div style="background:#003363;color:#fff;padding:1em 2em">&nbsp;
<p style="text-align: center;">You can also call AISG&#39;s switchboard<br />
Ersha Campus: <em>+8620 8735 3392</em><br />
Science Park Campus: <em>+8620 3213 5555</em></p>

<p style="text-align: center;">Ersha Campus Address: No. 3 Yan Yu Street South, Ersha Island, Yuexiu District, Guangzhou, PR China, 510105</p>

<p style="text-align: center;">广州市越秀区二沙岛烟雨南街3号</p>

<p style="text-align: center;">Science Park Campus Address: No.19 Kexiang Road, Huangpu District, Guangzhou,&nbsp;PR China,&nbsp;510663</p>

<p style="text-align: center;">广州市黄浦区科翔路19号</p>
</div>

<p>&nbsp;</p>


	</div>


	</div> -->




	</div>',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ];


        DB::table('contact_us')->truncate();
        DB::table('contact_us')->insert($default);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
}
