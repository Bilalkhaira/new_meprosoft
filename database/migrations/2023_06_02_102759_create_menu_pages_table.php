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
        Schema::create('menu_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('menu_id')->nullable();
            $table->string('top_sec_heading')->nullable();
            $table->mediumtext('top_sec_exp')->nullable();

            $table->string('exp_sec_heading')->nullable();
            $table->mediumtext('exp_sec_exp')->nullable();
            $table->mediumtext('exp_sec_exp2')->nullable();

            $table->string('form_sec_heading')->nullable();
            $table->mediumtext('form_sec_exp')->nullable();
            $table->string('form_sec_sub_heading1')->nullable();
            $table->string('form_sec_sub_heading2')->nullable();
            $table->string('form_sec_sub_heading3')->nullable();

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
        Schema::dropIfExists('menu_pages');
    }
};
