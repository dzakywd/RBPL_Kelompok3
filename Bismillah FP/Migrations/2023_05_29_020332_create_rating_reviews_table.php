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
        Schema::create('rating_review', function (Blueprint $table) {
            $table->increments('id_rating');
            $table->integer('rating');
            $table->text('review');

            $table->unsignedInteger('id_event');
            $table->foreign('id_event')->references('id_event')->on('event')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating_review');
    }
};
