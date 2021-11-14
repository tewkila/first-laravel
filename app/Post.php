<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $table = 'post';
    protected $fillable = [
        "id" , "title", "url", "lang_id", "menu_item", "img", "sort", "description", "date", "action", "status","user_id", "created_at", "updated_at", "type"

    ];

    public static function post(){
        $result = Language::join('menu', 'post.menu_id', '=', 'menu.id');
        return $result;
    }
}
