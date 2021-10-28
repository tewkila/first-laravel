<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use SoftDeletes;

    public $fillable = [ 'title', 'description' ];

    /**
     * The attributes that should be mutated to dates.
     * scratchcode.io
     * @var array
     */

    protected $dates = [ 'deleted_at' ];

}
