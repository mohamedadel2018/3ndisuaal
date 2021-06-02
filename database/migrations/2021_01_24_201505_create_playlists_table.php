<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_cat_id')->nullable();
            $table->unsignedBigInteger('program_sub_cat_id')->nullable();
            $table->unsignedBigInteger('instractor_id')->nullable();
            $table->text('name_ar')->nullable();
            $table->text('name_en')->nullable();
            $table->text('name_id')->nullable();
            $table->text('video_ar')->nullable();
            $table->text('video_en')->nullable();
            $table->text('video_id')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->text('meta_description_ar')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_description_id')->nullable();
            $table->unsignedBigInteger('views')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
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
        Schema::dropIfExists('playlists');
    }
}
