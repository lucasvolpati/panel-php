<?php

namespace Source\Models;

use Source\Models\Base;

class Testimonials extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    protected $table = 'testimonials';
    protected $fillable = [
        'name',
        'email',
        'testimonial',
        'visibility'
    ];
}
