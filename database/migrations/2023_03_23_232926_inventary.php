<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventary extends Migration
{

    public function up()
    {
        Schema::create('inventaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->double('price',20,2);
            $table->string('state');
            $table->integer('amount');
            $table->string('photo');
            $table->timestamps();
        });
    }

    public function down()
    {
      Schema::dropIfExists('inventaries');   
    }
}
