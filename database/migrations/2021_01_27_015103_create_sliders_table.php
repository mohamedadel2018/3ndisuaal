<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            // $table->string('iamge'); // MORPH MANY
            $table->id();
            $table->text('video_ar')->nullable();
            $table->text('video_en')->nullable();
            $table->text('video_id')->nullable();
            $table->integer('is_video')->default(0);
            $table->unsignedBigInteger('admin_id')->default(1);
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
        Schema::dropIfExists('sliders');
    }
}
