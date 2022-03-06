<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

//    protected $fillable = ['title', 'except', 'body'];
  protected $guarded = ['id'];
  protected $with = ['author', 'category'];

  public function scopeFilter($query, array $filters)   // Post::newQuery()->filter()
  {
    $query->when($filters['search'] ?? false, function ($query, $search){
      $query
        ->where('title', 'like', '%' . $search . '%')
        ->orWhere('body', 'like', '%' . $search . '%');
    });
  }

  /*public function getRouteKeyName(): string
  {
      return 'slug';          Specifies what will be used as a search parameter in the routes file
  }*/
  public function category()
  {
    //hasOne, hasMany, belongsTo, belongsToMany
    return $this->belongsTo(Category::class);
  }

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

}
