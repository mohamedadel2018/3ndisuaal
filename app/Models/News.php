<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory ,MyMedia;

    protected $fillable = [
        'title_ar',
        'title_en',
        'title_id',
        'admin_id',
    ];
    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }
}
