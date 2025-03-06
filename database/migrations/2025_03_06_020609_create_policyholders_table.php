<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('policyholders', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->date('dateOfBirth');
            $table->string('placeOfBirth');
            $table->string('sex');
            $table->string('citizenship');
            $table->string('contactNumber');
            $table->string('email')->unique();
            $table->boolean('AutoExcelPlus')->default(0);
            $table->boolean('InternationalTravelPlus')->default(0);
            $table->boolean('DomesticTravelPlus')->default(0);
            $table->boolean('ProTech')->default(0);
            $table->boolean('CondoExcelPlus')->default(0);
            $table->string('branch');
            $table->boolean('contactEmail')->default(0);
            $table->boolean('contactSMS')->default(0);
            $table->boolean('contactMessenger')->default(0);
            $table->boolean('contactCall')->default(0);
            $table->string('unitNo')->nullable();
            $table->string('street')->nullable();
            $table->string('barangay')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('region')->nullable();
            $table->string('uploadID')->nullable();
            $table->string('uploadDisplayPicture')->nullable();
            $table->string('payment')->nullable();
            $table->string('bankWallet')->nullable();
            $table->string('otp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policyholders');
    }
};
