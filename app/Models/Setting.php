<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'meta_title_ar',
        'meta_title_en',
        'meta_title_id',
        'meta_descrption_ar',
        'meta_descrption_en',
        'meta_descrption_id',
        'video_ar',
        'video_en',
        'video_id',
        'home_cover',
        'admin_id',
    ];


    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }
}
