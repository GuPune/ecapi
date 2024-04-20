<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_training', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title_th');
            $table->text('title_en')->nullable();
            $table->longText('detail');
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
        Schema::dropIfExists('news_training');
    }
}
