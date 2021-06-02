<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Encyclopedia extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'encyclopedia_cat_id',
        'encyclopedia_sub_cat_id',
        'question_ar',
        'question_en',
        'question_id',
        'answer_ar',
        'answer_en',
        'answer_id',
        'slug_ar',
        'slug_en',
        'slug_id',
        'meta_title_ar',
        'meta_title_en',
        'meta_title_id',
        'meta_description_ar',
        'meta_description_en',
        'meta_description_id',
        'views',
        'is_approved',
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
    // BELONGS TO ENCYCLOPEDIACAT
    public function encyclopediaCat()
    {
        return $this->belongsTo(EncyclopediaCat::class)->withDefault();
    }
    // BELONGS TO ENCYCLOPEDIA SUB CAT
    public function encyclopediaSubCat()
    {
        return $this->belongsTo(EncyclopediaSubCat::class)->withDefault();
    }

}
