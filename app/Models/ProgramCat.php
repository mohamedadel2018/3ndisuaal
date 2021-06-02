<?php

namespace App\Models;

use App\Traits\Helper;
use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramCat extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'name_ar',
        'name_en',
        'name_id',
        'admin_id',
    ];


    // HAS MANY PROGRAM SUB CATEGORIES
    public function programSubCats()
    {
        return $this->hasMany(ProgramSubCat::class);
    }


    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

    // HAS MANY  PLAYLISTS
    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }
}
