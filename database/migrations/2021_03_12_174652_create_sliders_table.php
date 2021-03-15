<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alt')->nullable();
            $table->string('class')->nullable();
            $table->longText('data_image_sizes')->nullable();
            $table->string('data_aspect_ratio')->nullable();
            $table->string('data_resource_title')->nullable();
            $table->string('data_resource_uuid')->nullable();
            $table->string('location')->nullable();
            $table->integer('type')->default(1)->nullable();
            $table->integer('position')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Model::unguard();
        $data = array();

        array_push($data, array(
            'name' => 'E-learning',
            'alt' => 'E-learning',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/new-banner2.jpg%22,%22width%22:256},{%22url%22:%22img/new-banner2.jpg%22,%22width%22:512},{%22url%22:%22img/new-banner2.jpg%22,%22width%22:800},{%22url%22:%22img/new-banner2.jpg%22,%22width%22:1200},{%22url%22:%22img/new-banner2.jpg%22,%22width%22:1600},{%22url%22:%22img/new-banner2.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.6666666666666666',
            'data_resource_title' => 'new-banner2.jpg',
            'data_resource_uuid' => 'a33a0635-2585-4253-8ae3-8ebedabd7f56',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'E-learning',
            'alt' => 'E-learning',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/new-banner.jpg%22,%22width%22:256},{%22url%22:%22img/new-banner.jpg%22,%22width%22:512},{%22url%22:%22img/new-banner.jpg%22,%22width%22:800},{%22url%22:%22img/new-banner.jpg%22,%22width%22:1200},{%22url%22:%22img/new-banner.jpg%22,%22width%22:1600},{%22url%22:%22img/new-banner.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.6666666666666666',
            'data_resource_title' => 'new-banner.jpg',
            'data_resource_uuid' => 'a33a0635-2585-4253-8ae3-8ebedabd7f56',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'School environment',
            'alt' => 'School environment',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b2.jpg%22,%22width%22:256},{%22url%22:%22img/b2.jpg%22,%22width%22:512},{%22url%22:%22img/b2.jpg%22,%22width%22:800},{%22url%22:%22img/b2.jpg%22,%22width%22:1200},{%22url%22:%22img/b2.jpg%22,%22width%22:1600},{%22url%22:%22img/b2.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.6666666666666666',
            'data_resource_title' => 'hero-employment-landing.jpg',
            'data_resource_uuid' => 'a33a0635-2585-4253-8ae3-8ebedabd7f56',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'girl reading in the library',
            'alt' => 'girl reading in the library',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b3.jpg%22,%22width%22:256},{%22url%22:%22img/b3.jpg%22,%22width%22:512},{%22url%22:%22img/b3.jpg%22,%22width%22:800},{%22url%22:%22img/b3.jpg%22,%22width%22:1200},{%22url%22:%22img/b3.jpg%22,%22width%22:1600},{%22url%22:%22img/b3.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.6666666666666666',
            'data_resource_title' => 'hero-learning-landing.jpg',
            'data_resource_uuid' => '91839aa9-22d1-451c-93df-d35c4fd44036',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'Students innovating',
            'alt' => 'Students innovating',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b4.jpg%22,%22width%22:256},{%22url%22:%22img/b4.jpg%22,%22width%22:512},{%22url%22:%22img/b4.jpg%22,%22width%22:800},{%22url%22:%22img/b4.jpg%22,%22width%22:1200},{%22url%22:%22img/b4.jpg%22,%22width%22:1600},{%22url%22:%22img/b4.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.6666666666666666',
            'data_resource_title' => 'hero-about-us-AISG-difference.jpg',
            'data_resource_uuid' => '0bedf896-3d02-45eb-a974-9f04c7bc430b',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'hero-aisg-field.jpg',
            'alt' => '',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b5.jpg%22,%22width%22:256},{%22url%22:%22img/b5.jpg%22,%22width%22:512},{%22url%22:%22img/b5.jpg%22,%22width%22:800},{%22url%22:%22img/b5.jpg%22,%22width%22:1200},{%22url%22:%22img/b5.jpg%22,%22width%22:1600},{%22url%22:%22img/b5.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.5134919048570857',
            'data_resource_title' => 'hero-aisg-field.jpg',
            'data_resource_uuid' => 'hero-aisg-field.jpg',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'hero-aisg-field.jpg',
            'alt' => '',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b6.jpg%22,%22width%22:256},{%22url%22:%22img/b6.jpg%22,%22width%22:512},{%22url%22:%22img/b6.jpg%22,%22width%22:800},{%22url%22:%22img/b6.jpg%22,%22width%22:1200},{%22url%22:%22img/b6.jpg%22,%22width%22:1600},{%22url%22:%22img/b6.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.5134919048570857',
            'data_resource_title' => 'hero-aisg-field.jpg',
            'data_resource_uuid' => 'hero-aisg-field.jpg',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'hero-aisg-field.jpg',
            'alt' => '',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b7.jpg%22,%22width%22:256},{%22url%22:%22img/b7.jpg%22,%22width%22:512},{%22url%22:%22img/b7.jpg%22,%22width%22:800},{%22url%22:%22img/b7.jpg%22,%22width%22:1200},{%22url%22:%22img/b7.jpg%22,%22width%22:1600},{%22url%22:%22img/b7.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.5134919048570857',
            'data_resource_title' => 'hero-aisg-field.jpg',
            'data_resource_uuid' => 'hero-aisg-field.jpg',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'hero-aisg-field.jpg',
            'alt' => '',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b8.jpg%22,%22width%22:256},{%22url%22:%22img/b8.jpg%22,%22width%22:512},{%22url%22:%22img/b8.jpg%22,%22width%22:800},{%22url%22:%22img/b8.jpg%22,%22width%22:1200},{%22url%22:%22img/b8.jpg%22,%22width%22:1600},{%22url%22:%22img/b8.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.5134919048570857',
            'data_resource_title' => 'hero-aisg-field.jpg',
            'data_resource_uuid' => 'hero-aisg-field.jpg',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'hero-aisg-field.jpg',
            'alt' => '',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b9.jpg%22,%22width%22:256},{%22url%22:%22img/b9.jpg%22,%22width%22:512},{%22url%22:%22img/b9.jpg%22,%22width%22:800},{%22url%22:%22img/b9.jpg%22,%22width%22:1200},{%22url%22:%22img/b9.jpg%22,%22width%22:1600},{%22url%22:%22img/b9.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.5134919048570857',
            'data_resource_title' => 'hero-aisg-field.jpg',
            'data_resource_uuid' => 'hero-aisg-field.jpg',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'hero-aisg-field.jpg',
            'alt' => '',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b10.jpg%22,%22width%22:256},{%22url%22:%22img/b10.jpg%22,%22width%22:512},{%22url%22:%22img/b10.jpg%22,%22width%22:800},{%22url%22:%22img/b10.jpg%22,%22width%22:1200},{%22url%22:%22img/b10.jpg%22,%22width%22:1600},{%22url%22:%22img/b10.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.5134919048570857',
            'data_resource_title' => 'hero-aisg-field.jpg',
            'data_resource_uuid' => 'hero-aisg-field.jpg',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        array_push($data, array(
            'name' => 'hero-aisg-field.jpg',
            'alt' => '',
            'class' => 'fsResource fsStyleAutoclear fsResourceTypeImage',
            'data_image_sizes' => '[{%22url%22:%22img/b11.jpg%22,%22width%22:256},{%22url%22:%22img/b11.jpg%22,%22width%22:512},{%22url%22:%22img/b11.jpg%22,%22width%22:800},{%22url%22:%22img/b11.jpg%22,%22width%22:1200},{%22url%22:%22img/b11.jpg%22,%22width%22:1600},{%22url%22:%22img/b11.jpg%22,%22width%22:2200}]',
            'data_aspect_ratio' => '0.5134919048570857',
            'data_resource_title' => 'hero-aisg-field.jpg',
            'data_resource_uuid' => 'hero-aisg-field.jpg',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ));

        DB::table('sliders')->truncate();
        DB::table('sliders')->insert($data);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
