<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->date('dob');
            $table->string('gender');    
            $table->string('emailAddress');         
            $table->string('telephone')->nullable();
            $table->string('paymentCycle');
            $table->text('address1');
            $table->text('address2')->nullable();
            $table->text('address3')->nullable();
            $table->text('address4');
            $table->text('address5');
            $table->string('postCode');
            $table->decimal('amountDue');
            $table->decimal('amountOutstanding')->nullable();

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
        Schema::dropIfExists('people');
    }
}
