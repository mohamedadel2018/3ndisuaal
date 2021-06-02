<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('about_ar')->nullable();
            $table->text('about_en')->nullable();
            $table->text('about_id')->nullable();
            $table->text('our_vision_ar')->nullable();
            $table->text('our_vision_en')->nullable();
            $table->text('our_vision_id')->nullable();
            $table->text('our_goals_ar')->nullable();
            $table->text('our_goals_en')->nullable();
            $table->text('our_goals_id')->nullable();
            $table->text('meta_title_ar')->nullable();
            $table->text('meta_title_en')->nullable();
            $table->text('meta_title_id')->nullable();
            $table->text('meta_descrption_ar')->nullable();
            $table->text('meta_descrption_en')->nullable();
            $table->text('meta_descrption_id')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
