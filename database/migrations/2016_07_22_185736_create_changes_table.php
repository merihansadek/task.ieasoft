<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('slider_image_1') ->nullable();
            $table->text('slider_image_2')->nullable();
            $table->text('slider_image_3')->nullable();
            $table->string('footer_1')->nullable();
            $table->string('footer_2')->nullable();
            $table->string('footer_3')->nullable();
            $table->string('footer_4')->nullable();
            $table->string('footer_5')->nullable();
            $table->string('footer_6')->nullable();
            $table->string('footer_7')->nullable();
            $table->string('footer_8')->nullable();
            $table->string('contact_mail')->nullable();
            $table->string('contact_phone')->nullable();
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
        Schema::drop('changes');
    }
}


