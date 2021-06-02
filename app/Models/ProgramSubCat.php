<?php

namespace App\Models;

use App\Traits\Helper;
use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramSubCat extends Model
{
    use HasFactory, MyMedia;
    protected $fillable = [
        'program_cat_id',
        'name_ar',
        'name_en',
        'name_id',
        'admin_id',
    ];


    // BELONGS TO PROGRAM CATEGORY
    public function programCat()
    {
        return $this->belongsTo(ProgramCat::class)->withDefault();
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
