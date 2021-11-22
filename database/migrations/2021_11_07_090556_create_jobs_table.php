<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('slots_needed')->nullable();
            $table->string('job_category')->nullable();
            $table->string('course')->nullable();
            $table->string('appreciation_token')->nullable();
            $table->string('attachment_start')->nullable();
            $table->string('attachment_end')->nullable();
            $table->string('gender')->nullable();
            $table->longText('qualification')->nullable();
            $table->longText('additional_information')->nullable();
            $table->string('attachment_status')->default('active');
            $table->bigInteger('company_id')->nullable()->unsigned();
            $table->foreign('company_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('jobs');
    }
}
