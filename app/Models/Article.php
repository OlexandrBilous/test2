<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['content', 'title', 'postdate', 'user_id', 'category_id'];
    protected $alias = 'articleOne';

    public function link()
    {
        return route($this->alias, $this);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}



