<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->string('title_ru');
            $table->string('title_uz');
            $table->text('description_ru');
            $table->text('description_uz');
            $table->text('text_ru');
            $table->text('text_uz');
            $table->string('stack_title_ru')->nullable();
            $table->string('stack_title_uz')->nullable();
            $table->text('stack_text_ru')->nullable();
            $table->text('stack_text_uz')->nullable();
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
        Schema::dropIfExists('services');
    }
}
