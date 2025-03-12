<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('articles', function ($table) {
    $table->id();
    $table->text('image');
    $table->string('title');
    $table->string('tags');
    $table->string('category');
    $table->string('visibility');
    $table->string('comments');
    $table->string('content');
    $table->timestamps();
});