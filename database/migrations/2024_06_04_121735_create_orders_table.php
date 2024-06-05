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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // REFERENCES MOBILIERS
            $table->UnsignedBigInteger('mob_id');
            $table->foreign('mob_id')->references('id')->on('mobiliers');
            // REFERENCES USERS
            $table->UnsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // REFERENCES CLIENTS
            $table->UnsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
