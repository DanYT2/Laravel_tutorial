<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//    protected $fillable = ['title', 'except', 'body'];
    protected $guarded = ['id'];

    /*public function getRouteKeyName(): string
    {
        return 'slug';          Specifies what will be used as a search parameter in the routes file
    }*/


}
