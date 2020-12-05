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
            $table->string('regno');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('fathername');
            $table->string('fatheroccupation');
            $table->string('mothername');
            $table->string('class');
            $table->string('section');
            $table->date('dob');
            $table->string('email');
            $table->BigInteger('cellno');
            $table->string('address');
            $table->string('city');
            $table->string('country');
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
