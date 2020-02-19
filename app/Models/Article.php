<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['content', 'title', 'postdate', 'user_id'];
    protected $alias = 'articleOne';

    public function link()
    {
        return route($this->alias, $this);

    }


}



