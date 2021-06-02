<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_cat_id')->nullable();
            $table->unsignedBigInteger('book_sub_cat_id')->nullable();
            $table->unsignedBigInteger('instractor_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->text('title_ar')->nullable();
            $table->text('title_en')->nullable();
            $table->text('title_id')->nullable();
            $table->text('about_ar')->nullable();
            $table->text('about_en')->nullable();
            $table->text('about_id')->nullable();
            $table->text('meta_title_ar')->nullable();
            $table->text('meta_title_en')->nullable();
            $table->text('meta_title_id')->nullable();
            $table->text('slug_ar')->nullable();
            $table->text('slug_en')->nullable();
            $table->text('slug_id')->nullable();
            $table->text('meta_description_ar')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_description_id')->nullable();
            $table->integer('is_featured')->default(0);
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
        Schema::dropIfExists('books');
    }
}
