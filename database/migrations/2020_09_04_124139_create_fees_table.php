<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('regno');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('class');
            $table->string('section');
            $table->string('month');
            $table->BigInteger('year');
            $table->BigInteger('tutionfee');
            $table->BigInteger('annualfee');
            $table->BigInteger('totalfee');
            $table->BigInteger('feepaid');
            $table->BigInteger('balancefee');
            $table->string('feestatus');
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
        Schema::dropIfExists('fees');
    }
}
