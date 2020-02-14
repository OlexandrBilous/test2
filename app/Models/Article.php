<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $alias = 'articleOne';

    public function link()
    {
        return route($this->alias, $this);

    }


}


