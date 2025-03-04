<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('policyholders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('middle_name', 100)->nullable();
            $table->string('last_name', 100);
            $table->date('date_of_birth');
            $table->string('place_of_birth', 255);
            $table->enum('sex', ['Male', 'Female', 'Other']);
            $table->string('citizenship', 100);
            $table->string('contact_number', 20);
            $table->string('email')->unique();
            $table->json('interested_policies')->nullable();
            $table->json('contact_methods')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('policyholders');
    }
};
