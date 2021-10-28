<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = [
        "id" , "title", "url", "lang_id", "sort", "drop_down", "created_at", "updated_at"

    ];
//    public static function language(){
//       $menu_item = Language::join('post', 'post.menu_id', '=', 'menu.id');
//        return $menu_item;
//    }

}
