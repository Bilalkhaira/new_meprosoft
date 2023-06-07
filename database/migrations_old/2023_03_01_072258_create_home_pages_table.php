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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('for_section_identification')->nullable();
            $table->string('images')->nullable();
            $table->text('main_heading')->nullable();
            $table->string('others_heading')->nullable();
            $table->string('links')->nullable();
            $table->string('rating_or_percentage')->nullable();
            $table->longText('text')->nullable();
            $table->longText('text2')->nullable();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }
};
