<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'name',
        'label_ar',
        'label_en',
    ];

    public function admins()
    {
        return $this->belongsToMany(Admin::class);
    }

    public function permations()
    {
        return $this->belongsToMany(Permation::class);
    }

}
