<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('interest');
            $table->string('PayType');
            $table->integer('IntervalPay');
            $table->string('GracePeriod');
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')->on('users')->ondelete('cascade');
            $table->foreign('loan_id')
            ->references('id')->on('loan_request')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
