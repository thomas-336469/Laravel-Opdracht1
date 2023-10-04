<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('shops', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('location');
    $table->string('address');
    $table->string('phone');
    $table->string('email');
    $table->timestamps();
});

Schema::dropIfExists('shop');
