<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [
        "id" , "title", "url", "lang_id", "menu_item", "img", "sort", "description", "date", "action", "status","user_id", "created_at", "updated_at"

    ];

    public static function paginate(int $int)
    {
    }

    public static function post(){
        $result = Language::join('menu', 'post.menu_id', '=', 'menu.id');
        return $result;
    }
}
