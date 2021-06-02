<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EncyclopediaSubCat extends Model
{
    use HasFactory,
        MyMedia;
    protected $fillable = [
        'encyclopedia_cat_id',
        'name_ar',
        'name_en',
        'name_id',
        'admin_id',
    ];

    // HAS MANY  PROGRAMS
    public function encyclopedias()
    {
        return $this->hasMany(Encyclopedia::class);
    }




    // BELONGS TO PROGRAM CATEGORY
    public function encyclopediaCat()
    {
        return $this->belongsTo(EncyclopediaCat::class)->withDefault();
    }

    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

    // HAS MANY QUESTIONS
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}
