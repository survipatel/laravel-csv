<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_transdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('financialTranId');
            $table->foreign('financialTranId')->references('id')->on('financial_trans');
            $table->tinyInteger('moduleid');
            $table->unsignedDecimal('amount');
           // $table->foreign('amount')->references('amount')->on('financial_trans');
            $table->integer('headId');
            $table->enum('crdr', ['C', 'D']);            
            $table->bigInteger('brid');
            $table->string('head_name');
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
        Schema::dropIfExists('_financial_transdetails');
    }
};
