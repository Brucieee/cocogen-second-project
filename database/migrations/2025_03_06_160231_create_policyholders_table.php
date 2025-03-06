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

            $table->enum('AutoExcelPlus', ['yes', 'no'])->default('no');
            $table->enum('InternationalTravelPlus', ['yes', 'no'])->default('no');
            $table->enum('DomesticTravelPlus', ['yes', 'no'])->default('no');
            $table->enum('ProTech', ['yes', 'no'])->default('no');
            $table->enum('CondoExcelPlus', ['yes', 'no'])->default('no');

            $table->string('branch')->nullable();

            $table->enum('contactEmail', ['yes', 'no'])->default('no');
            $table->enum('contactSMS', ['yes', 'no'])->default('no');
            $table->enum('contactMessenger', ['yes', 'no'])->default('no');
            $table->enum('contactCall', ['yes', 'no'])->default('no');

            $table->string('unitNo')->nullable();
            $table->string('street')->nullable();
            $table->string('barangay')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('region')->nullable();
            $table->string('zip')->nullable();

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
