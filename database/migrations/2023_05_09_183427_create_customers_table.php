<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',50) ;
            $table->string('lastName',50) ;
            $table->string('phone',15)->nullable() ;
            $table->string('status',45) ;
            $table->timestamps();
            $table->foreignIdFor(User::class,'created_by') ;
            $table->foreignIdFor(User::class,'updated_by') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
