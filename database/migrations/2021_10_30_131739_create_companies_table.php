<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('cover')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('website_name')->nullable();
            $table->string('team_size')->nullable();
            $table->string('category')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('logitude')->nullable();
            $table->string('latitude')->nullable();
            $table->text('about_company')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
