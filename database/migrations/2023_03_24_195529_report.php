<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Report extends Migration
{

    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('key_proveedor');
            $table->string('key_producto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
