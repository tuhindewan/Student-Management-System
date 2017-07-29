<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('transact_id');
            $table->datetime('transact_date');
            $table->integer('fee_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('s_feeid')->unsigned();
            $table->float('paid',8,2);
            $table->string('remark',50)->nullable();
            $table->string('description',200)->nullable();
            $table->foreign('fee_id')->references('fee_id')->on('fees');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('s_feeid')->references('s_feeid')->on('studentfees');
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
        Schema::dropIfExists('transactions');
    }
}
