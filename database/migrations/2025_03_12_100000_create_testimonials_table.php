<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('testimonials', function ($table) {
    $table->id();
    $table->text('name');
    $table->string('email');
    $table->text('testimonial');
    $table->string('visibility');
    $table->timestamps();
});