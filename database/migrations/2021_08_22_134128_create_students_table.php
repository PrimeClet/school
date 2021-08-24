<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('surname')->nullable();
            $table->string('title')->nullable();
            $table->string('firstname')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('previousname')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('dayphone')->nullable();
            $table->string('eveningphone')->nullable();
            $table->string('fax')->nullable();
            $table->string('countrycode')->nullable();
            $table->string('nationality')->nullable();
            $table->string('learning')->nullable();
            $table->string('citybirth')->nullable();
            $table->string('countrybirth')->nullable();
            $table->string('countryresidence')->nullable();
            $table->string('fundingsource')->nullable();
            $table->string('criminalconviction')->nullable();
            $table->text('ccdetails')->nullable();
            $table->string('programs')->nullable()->default('HND');
            $table->string('pubs')->nullable();
            $table->string('specialneeds')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
