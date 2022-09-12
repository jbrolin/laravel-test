<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // mass assignment
    //    use one of below
    //    protected $guarded = ['id']; // id is not allowed
    // protected $fillable = ['title','excerpt', 'body']; // all assigned field allows

    // do not allow mass assignment (best approach)
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
