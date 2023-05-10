<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',2000) ;
            $table->string('slug',2000) ;
            $table->string('image',2000)->nullable() ;
            $table->string('image_mime')->nullable() ;
            $table->integer('image_size')->nullable() ;
            $table->longText('description') ;
            $table->decimal('price',8,2);
            $table->foreignIdFor(User::class,'created_by') ;
            $table->foreignIdFor(User::class,'deleted_by') ;
            $table->softDeletes();
            $table->foreignIdFor(User::class,'deleted_by') ;
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
        Schema::dropIfExists('products');
    }
}
