<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->mediumText("phrasing");
            $table->string("impact_text_color");
            $table->string("units_text_color");
            $table->string("text_color");
            $table->string("icon_color");
            $table->string("icon_background_color");
            $table->string("box_background_color");
            $table->boolean("use_arbor_fonts")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theme_settings');
    }
};
