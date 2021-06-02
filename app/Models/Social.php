<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'icon',
        'link_ar',
        'link_en',
        'link_id',
        'admin_id',
    ];

    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }
}
