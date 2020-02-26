<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['name'];
    protected $aliasCategories = 'showCategories';
    public $timestamps = false;
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function link()
    {
        return route($this->aliasCategories, $this);
    }
}



