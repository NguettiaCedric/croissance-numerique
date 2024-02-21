<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    use HasFactory, Sluggable;

    // protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'slug',
        'satuts',
        'description',
        'image',
        'lien',
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
