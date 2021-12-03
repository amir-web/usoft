<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru');
            $table->string('title_uz');
            $table->text('tab1_ru');
            $table->text('tab1_uz');
            $table->text('tab2_ru');
            $table->text('tab2_uz');
            $table->text('tab3_ru');
            $table->text('tab3_uz');
            $table->string('link');
            $table->string('category')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
