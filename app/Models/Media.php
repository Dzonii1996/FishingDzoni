<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{

    const IMAGE = ['jpg','jpeg','png','webp'];
    const AUDIO = ['mp3','mp4'];
    const DOCUMENT = ['doc','docx','pdf'];

    use HasFactory;
    protected $casts = [
        'properties' => 'array',
    ];
    protected $fillable = [
        'alt',
        'slug',
        'properties',
        'type',
    ];
}
