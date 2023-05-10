<?php

use App\Models\Country;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_adresses', function (Blueprint $table) {
            $table->id();
            $table->string("type",45) ;
            $table->string("adress1",255) ;
            $table->string("adress2",255) ;
            $table->string("city",50) ;
            $table->string("state",50)->nullable() ;
            $table->string("zipCode",45) ;
            $table->string("countryCode",3) ;
            $table->foreignIdFor(Customer::class,'customer_id');
            $table->foreignIdFor(Country::class,'county_code') ;
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
        Schema::dropIfExists('customer_adresses');
    }
}
