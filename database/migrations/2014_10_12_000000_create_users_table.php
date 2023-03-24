<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('User', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->date('dob');
            $table->string('address');
            $table->string('nid');
            $table->integer('sells')->default(0);
            $table->integer('purchases')->default(0);

            $table->timestamp('email_verified_at')->nullable();
           
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User');
    }
};
