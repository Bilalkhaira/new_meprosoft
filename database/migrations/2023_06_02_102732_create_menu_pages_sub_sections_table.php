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
        Schema::create('menu_pages_sub_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('menu_pages_id')->nullable();
            $table->string('heading')->nullable();
            $table->longText('exp')->nullable();
            $table->string('img')->nullable();
            $table->string('btn_link')->nullable();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_pages_sub_sections');
    }
};
