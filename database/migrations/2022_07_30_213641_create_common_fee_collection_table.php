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
        Schema::create('common_fee_collection', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('moduleid');
            $table->integer('transId');
            $table->string('admno');
            $table->string('rollno');
            $table->integer('amount');
            $table->integer('brid');
            $table->date('acadamicYear');
            $table->date('financialYear');
            $table->string('displayReceiptNo');
            $table->integer('Entrymode');
            $table->DateTime('PaidDate');
            $table->string('inactive');
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
        Schema::dropIfExists('common_fee_collection');
    }
};
