<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeBannerContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_banner_content_table', function (Blueprint $table) {
            $table->id('home_banner_content_id');
            $table->string('home_banner_content_title_up');
            $table->string('home_banner_content_title_middle');
            $table->string('home_banner_content_title_down');
            $table->longText('home_banner_content_subtitle');
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
        Schema::dropIfExists('failed_jobs');
    }
}
