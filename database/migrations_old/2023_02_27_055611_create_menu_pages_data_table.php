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
        Schema::create('menu_pages_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('menu_id')->nullable();
            $table->string('topSection_heading')->nullable();
            $table->mediumtext('topSection_explanation')->nullable();
            $table->string('topSection_img')->nullable();
            $table->string('topSection_disable')->default('false');

            $table->string('explanationSection_heading')->nullable();
            $table->mediumtext('explanationSection_explanation')->nullable();
            $table->string('explanationSection_img')->nullable();
            $table->string('explanationSection_disable')->default('false');

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->timestamps();
        });
    }
};
