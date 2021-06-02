<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EncyclopediaCat extends Model
{
    use HasFactory, MyMedia;
    protected $fillable = [
        'name_ar',
        'name_en',
        'name_id',
        'admin_id',
    ];


    // HAS MANY PROGRAM SUB CATEGORIES
    public function encyclopediaSubCats()
    {
        return $this->hasMany(EncyclopediaSubCat::class);
    }


    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

    // HAS MANY  PROGRAMS
    public function encyclopedias()
    {
        return $this->hasMany(Encyclopedia::class);
    }

    // HAS MANY QUESTIONS
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
