<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('encyclopedia_cat_id')->nullable();
            $table->text('encyclopedia_sub_cat_id')->nullable();
            $table->text('email')->nullable();
            $table->text('question')->nullable();
            $table->longText('answer')->nullable();
            $table->text('code')->nullable();
            $table->tinyInteger('is_read')->default(1); // 1 STEEL WITH OUT ANSWER | 2 ANSWERED
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
        Schema::dropIfExists('questions');
    }
}
