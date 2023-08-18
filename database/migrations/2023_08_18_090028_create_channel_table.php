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
        Schema::create('channel', function (Blueprint $table) {
            $table->unsignedBigInteger("ChannelID")->autoIncrement()->nullable(false);
            $table->string("ChannelName", 255)->nullable(false);
            $table->string("Description", 500)->nullable(false);
            $table->bigInteger("SubcribersCount")->unsigned()->nullable(false)->default(0);
            $table->string("URL", 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channel');
    }
};
