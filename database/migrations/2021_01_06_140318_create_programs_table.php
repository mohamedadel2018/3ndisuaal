<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('playlist_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->text('title_ar')->nullable();
            $table->text('title_en')->nullable();
            $table->text('title_id')->nullable();
            $table->text('default_video_ar')->nullable();
            $table->text('default_video_en')->nullable();
            $table->text('default_video_id')->nullable();
            $table->text('video_ar')->nullable();
            $table->text('video_en')->nullable();
            $table->text('video_id')->nullable();
            $table->text('sound_ar')->nullable();
            $table->text('sound_en')->nullable();
            $table->text('sound_id')->nullable();
            $table->longText('about_ar')->nullable();
            $table->longText('about_en')->nullable();
            $table->longText('about_id')->nullable();
            $table->text('meta_title_ar')->nullable();
            $table->text('meta_title_en')->nullable();
            $table->text('meta_title_id')->nullable();
            $table->text('slug_ar')->nullable();
            $table->text('slug_en')->nullable();
            $table->text('slug_id')->nullable();
            $table->text('meta_description_ar')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_description_id')->nullable();
            // $table->longText('image')->nullable(); // USIGN MORPH
            $table->bigInteger('views')->default(0)->nullable();
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
        Schema::dropIfExists('programs');
    }
}
