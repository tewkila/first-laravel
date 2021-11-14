<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        "id" , "title", "url", "lang_id","img", "sort","description",  "created_at", "updated_at", "children"

    ];
}
