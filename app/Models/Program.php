<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory,MyMedia;

    protected $fillable = [
        'playlist_id',
        'admin_id',
        'title_ar',
        'title_en',
        'title_id',
        'default_video_ar',
        'default_video_en',
        'default_video_id',
        'video_ar',
        'video_en',
        'video_id',
        'sound_ar',
        'sound_en',
        'sound_id',
        'about_ar',
        'about_en',
        'about_id',
        'views',
        'meta_title_ar',
        'meta_title_en',
        'meta_title_id',
        'slug_ar',
        'slug_en',
        'slug_id',
        'meta_description_ar',
        'meta_description_en',
        'meta_description_id',
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


    // HAS MANY READS
    public function reads()
    {
        return $this->hasMany(Read::class);
    }


    // BELONGS TO PLAYLIST
    public function playlist()
    {
        return $this->belongsTo(Playlist::class)->withDefault();
    }
}
