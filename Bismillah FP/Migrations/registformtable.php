<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regist_forms', function (Blueprint $table) {
            $table->increments('idForm');
            $table->timestamps();
            $table->string('organizer');
            $table->string('address');
            $table->string('contact');
            $table->string('email');
            $table->string('identityCard');
            $table->string('title');
            $table->string('eventLocation');
            $table->string('category');
            $table->string('ticketPrice');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('eventDetail');
            $table->string('accountNumber');
            $table->string('paymentProof');
            $table->string('eventPoster');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regist_forms');
    }
}
