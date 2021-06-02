<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instractor extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'name_ar',
        'name_en',
        'name_id',
        'about_ar',
        'about_en',
        'about_id',
        'admin_id',
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

    // HAS MANY PROGRAM
    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }

    // PROGRAMS INSTRACTOR THROW PLAYLISTS
    public function programs()
    {
        return $this->hasManyThrough(Program::class, Playlist::class);
    }

    // HAS MANY BOOKS
    public function books()
    {
        return $this->hasMany(Book::class);
    }


}
