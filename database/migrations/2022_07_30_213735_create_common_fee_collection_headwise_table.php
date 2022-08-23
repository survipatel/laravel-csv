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
        Schema::create('common_fee_collection_headwise', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('moduleid');
            $table->unsignedBigInteger('receiptId');
            $table->integer('headId');
            $table->string('headName');
            $table->decimal('amount');
            $table->integer('brid');
            $table->timestamps();
             $table->foreign('receiptId')->references('id')->on('common_fee_collection');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_fee_collection_headwise');

    }
};
