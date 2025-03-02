<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description','icon'];


    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id');
    }
}
