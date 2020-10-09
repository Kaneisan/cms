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
    public $timestamps = true;
}
