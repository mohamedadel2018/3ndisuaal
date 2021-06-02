<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'is_video',
        'video_ar',
        'video_en',
        'video_id',
        'admin_id',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }
}
