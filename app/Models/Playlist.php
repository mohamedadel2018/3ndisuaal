<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Playlist extends Model
{
    use HasFactory,MyMedia;

    protected $fillable = [
        'program_cat_id',
        'program_sub_cat_id',
        'instractor_id',
        'video_ar',
        'video_en',
        'video_id',
        'name_ar',
        'name_en',
        'name_id',
        'meta_description_ar',
        'meta_description_en',
        'meta_description_id',
        'views',
        'is_featured',
        'admin_id',
    ];


    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

    // HAS MANY PROGRAMS
    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    // BELONGS TO PROGRAM CATEGORY
    public function programCat()
    {
        return $this->belongsTo(ProgramCat::class)->withDefault();
    }
    // BELONGS TO PROGRAM SUB CATEGORY
    public function programSubCat()
    {
        return $this->belongsTo(ProgramSubCat::class)->withDefault();
    }
    // BELONGS TO PROGRAM CATEGORY
    public function instractor()
    {
        return $this->belongsTo(Instractor::class)->withDefault();
    }
}
