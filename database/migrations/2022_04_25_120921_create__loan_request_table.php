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
        Schema::create('Loan_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->Biginteger('amount');
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
        Schema::dropIfExists('_loan_request');
    }
}
