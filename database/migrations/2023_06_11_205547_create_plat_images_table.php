<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plat_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plat_id');
            $table->string('image_path');
            $table->timestamps();
            $table->foreign('plat_id')
                  ->references('id')
                  ->on('plats')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plat_images');
    }
}
