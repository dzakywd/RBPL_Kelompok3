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
            $table->increments('id_form');
            $table->string('organizer');
            $table->string('address');
            $table->string('contact');
            $table->string('email');
            $table->string('identity_card');
            $table->string('title');
            $table->string('event_location');
            $table->string('category');
            $table->string('ticket_price');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('event_Detail');
            $table->string('event_website');
            $table->string('event_logo');
            $table->string('event_poster');
            $table->string('account_number');
            $table->string('payment_proof');
            $table->string('status');
            $table->timestamps();
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
