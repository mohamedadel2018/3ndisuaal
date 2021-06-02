<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReadSubCat extends Model
{
    use HasFactory, MyMedia;
    protected $fillable = [
        'read_cat_id',
        'name_ar',
        'name_en',
        'name_id',
        'admin_id',
    ];


    // BELONGS TO READ CATEGORY
    public function readCat()
    {
        return $this->belongsTo(ReadCat::class)->withDefault();
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
