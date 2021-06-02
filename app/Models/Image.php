<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;


    protected $fillable = [
        'imageable',
        'name',
        'url',
        'group_name',
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
