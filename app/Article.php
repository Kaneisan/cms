<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    /*
    variable table disamakan dengan nama table
    yang sudah dibuat di database laravel
    */
    protected $primaryKey = "id";
    //mengset pK id
    protected $fillable = ['title', 'content', 'feature_image'];
    public $timestamps = true;
}
