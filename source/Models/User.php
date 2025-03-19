<?php

namespace Source\Models;

use Source\Models\Base;

class User extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
