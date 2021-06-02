<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('meta_title_ar')->nullable();
            $table->text('meta_title_en')->nullable();
            $table->text('meta_title_id')->nullable();
            $table->text('meta_descrption_ar')->nullable();
            $table->text('meta_descrption_en')->nullable();
            $table->text('meta_descrption_id')->nullable();
            $table->text('video_ar')->nullable();
            $table->text('video_en')->nullable();
            $table->text('video_id')->nullable();
            $table->integer('home_cover')->default(1); // 1 VIDEO | 2 SLIDER WITH VIDEOS
            $table->unsignedBigInteger('admin_id');
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
        Schema::dropIfExists('settings');
    }
}
