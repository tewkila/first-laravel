<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';
    protected $fillable = [
        "id" , "title", "url", "created_at", "updated_at"

    ];
}
