<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('firstName') ;
            $table->string('lastName') ;
            $table->string('phone')->nullable() ;
            $table->string('adress1',255) ;
            $table->string('adress2',255) ;
            $table->string('city') ;
            $table->string('state',45) ;
            $table->string('zipCode',45) ;
            $table->string('countryCode',3) ;
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
        Schema::dropIfExists('details');
    }
}
