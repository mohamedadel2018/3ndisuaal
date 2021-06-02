<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncyclopediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encyclopedias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('encyclopedia_cat_id')->nullable();
            $table->unsignedBigInteger('encyclopedia_sub_cat_id')->nullable();
            $table->text('question_ar')->nullable();
            $table->text('question_en')->nullable();
            $table->text('question_id')->nullable();
            $table->text('answer_ar')->nullable();
            $table->text('answer_en')->nullable();
            $table->text('answer_id')->nullable();
            $table->text('slug_ar')->nullable();
            $table->text('slug_en')->nullable();
            $table->text('slug_id')->nullable();
            $table->text('meta_title_ar')->nullable();
            $table->text('meta_title_en')->nullable();
            $table->text('meta_title_id')->nullable();
            $table->text('meta_description_ar')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_description_id')->nullable();
            $table->integer('is_approved')->default(0);
            $table->BigInteger('views')->default(0);
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
        Schema::dropIfExists('encyclopedias');
    }
}
