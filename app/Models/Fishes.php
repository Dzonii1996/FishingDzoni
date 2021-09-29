<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fishes extends Model
{
    use HasFactory;
    protected  $fillable = [
        'name',
        'description',
        'size',
        'type',

    ];

    public function place () {
        return $this ->hasMany(Places::class);
    }

}
