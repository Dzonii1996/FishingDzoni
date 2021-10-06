<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected  $fillable=['title' , 'content', 'featured_image_id',
        'author_id','status_id'];



    public function featured_image()
    {
        return $this->hasOne(Media::class, 'id', 'featured_image_id');
    }


    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }


}
