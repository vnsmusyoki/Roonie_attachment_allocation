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
            $table->text('job_description')->nullable();
            $table->string('job_category')->nullable();
            $table->integer('salary')->nullable();
            $table->string('gender')->nullable();
            $table->string('industry')->nullable();
            $table->string('qualification')->nullable();
            $table->date('date')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->enum('status',['active','deactive'])->default('active');
            $table->integer('company_id');
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
