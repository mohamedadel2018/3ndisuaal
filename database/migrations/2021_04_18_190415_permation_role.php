<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermationRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permation_role', function (Blueprint $table) {
            $table->unsignedBigInteger('permation_id');
            $table->unsignedBigInteger('role_id');
            $table->primary(['permation_id', 'role_id']);
            $table->foreign('permation_id')->references('id')->on('permations')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('permation_role');
    }
}
