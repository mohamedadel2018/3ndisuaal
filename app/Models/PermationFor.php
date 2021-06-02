<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermationFor extends Model
{
    use HasFactory, MyMedia;

    protected $fillable = [
        'name_en',
        'name_ar',
    ];

    public function permations()
    {
        return $this->hasMany(Permation::class);
    }
}
