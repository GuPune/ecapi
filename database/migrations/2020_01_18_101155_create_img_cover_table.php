<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgCoverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_cover', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title_th')->nullable();
            $table->text('title_en')->nullable();
            $table->text('sub_title_th')->nullable();
            $table->text('sub_title_en')->nullable();
            $table->text('file')->nullable();
            $table->text('type')->nullable();
            $table->text('size')->nullable();
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
        Schema::dropIfExists('img_cover');
    }
}
