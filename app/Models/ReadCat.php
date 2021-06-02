<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReadCat extends Model
{
    use HasFactory, MyMedia;
    protected $fillable = [
        'name_ar',
        'name_en',
        'name_id',
        'admin_id',
    ];


    // HAS MANY READ SUB CATEGORIES
    public function readSubCats()
    {
        return $this->hasMany(ReadSubCat::class);
    }


    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

    // HAS MANY  READS
    public function reads()
    {
        return $this->hasMany(Read::class);
    }

}
