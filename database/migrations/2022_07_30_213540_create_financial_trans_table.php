
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
        Schema::create('financial_trans', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('moduleid');
            $table->integer('transid');
            $table->string('admno');
            $table->decimal('amount');
            $table->enum('crdr', ['C', 'D']);
            $table->dateTime('tranDate');  
            $table->date('acadYear'); 
            $table->integer('Entrymode'); 
            $table->integer('voucherno'); 
            $table->integer('brid'); 
            $table->string('type_of_consession'); 

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
        Schema::dropIfExists('_financial_trans');
    }
};
