<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    use HasFactory;
    protected  $fillable = [
        'name',
        'description',
        'StartAt',
        'EndsAt',

    ];

    public function places()
    {
        return $this->hasMany(Places::class, 'place_id', 'id');
    }



}
