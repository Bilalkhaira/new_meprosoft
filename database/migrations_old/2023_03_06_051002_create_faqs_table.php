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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->longText('exp')->nullable();
            $table->mediumText('qeustions')->nullable();
            $table->mediumText('ans')->nullable();
            $table->timestamps();
        });
    }
};
