<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKycTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('grandfather_name');
            $table->string('spouse_name');
            $table->string('district');
            $table->string('vdc');
            $table->string('ward');
            $table->string('dob');
            $table->string('gender');
            $table->string('occupation');
            $table->string('identity_type');
            $table->string('identity_number');
            $table->string('issued_form');
            $table->string('issued_date');
            $table->mediumText('front');
            $table->mediumText('back');
            $table->mediumText('pp_photo');
            $table->unsignedBigInteger('individual_users_id');
            $table->foreign('individual_users_id')->references('id')->on('individual_users');
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
        Schema::dropIfExists('kyc');
    }
}
