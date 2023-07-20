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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('postnom')->nullable(); 
            $table->string('email')->unique();
            $table->integer('status')->default('1');
            $table->mediumText('Occupation')->nullable(); 
            $table->mediumText('noconsult')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('userType'); 
            $table->timestamp('lastLogin')->nullable();
            $table->text('photo')->nullable();
            $table->mediumText('phone')->nullable();
            $table->date('dateNaissance');
            $table->char('sexe',6);
            $table->mediumText('adresse');
            $table->mediumText('bio')->nullable();
            $table->timestamp('debut_consultation')->nullable();
            $table->timestamp('fin_consultation')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
