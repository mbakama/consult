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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_received');
            $table->unsignedBigInteger('user_sent');
            $table->foreign('user_received')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_sent')->references('id')->on('users')->onDelete('cascade');
            $table->text('contenu'); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
