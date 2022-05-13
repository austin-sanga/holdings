<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lender_id');
            $table->unsignedBigInteger('borrower_id');
            $table->integer('LoanType');
            $table->Biginteger('amount');
            $table->decimal('interest');
            $table->string('GracePeriod');
            $table->string('PayType');
            $table->integer('IntervalPay');
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
        Schema::dropIfExists('loan_contracts');
    }
}


/* 
Table details:
    -contract id
    -lender id
    -borrowers id
    -loan type
    -loan amount
    -interest
    -Grace period
    -pay type
    -interval pay
    -loan status
    -Timestamps 

*/