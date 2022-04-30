<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->integer('LoanType');
            $table->Biginteger('amount');
            $table->string('PayType');
            $table->integer('IntervalPay');
            $table->string('GracePeriod');
            $table->timestamps();
            $table->foreign('users_id')
            ->references('id')->on('users')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_request');
    }
}
