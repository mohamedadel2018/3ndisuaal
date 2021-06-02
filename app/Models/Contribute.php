<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contribute extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'text',
    ];

    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }
}
