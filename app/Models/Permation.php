<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permation extends Model
{
    use HasFactory,MyMedia;

    protected $fillable = [
        'name',
        'label_en',
        'label_ar',
        'permation_for_id',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function permationFor()
    {
        return $this->belongsTo(PermationFor::class);
    }
}
