<?php

namespace Source\Models;

use Source\Models\Base;

class Article  extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    protected $table = 'articles';
}
