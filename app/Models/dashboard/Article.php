<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =[];

    public  function category()
    {
        return $this->belongsTo(Category::class);
    }

}
