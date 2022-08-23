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
        Schema::create('fee_types', function (Blueprint $table) {
            $table->id();
            $table->integer('moduleid');
            $table->unsignedBigInteger('collection_id');
            $table->foreign('fee_category')->references('id')->on('feecategory');

            $table->string('f_name');
            $table->unsignedBigInteger('fee_category');
            $table->foreign('collection_id')->references('id')->on('feecollectiontype');

            $table->enum('inactive',['0','1']);
            $table->enum('isRefundable',['0','1']);
            $table->tinyInteger('isScholarship');
            $table->integer('brid');
            $table->integer('sequenceNo');
            $table->string('feeTypeName');
            $table->string('feeTypeNameTally');
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
        Schema::dropIfExists('_fee_types');
    }
};
