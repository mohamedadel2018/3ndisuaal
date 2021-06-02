<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory, MyMedia;

    protected $fillable = [
        'book_cat_id',
        'book_sub_cat_id',
        'instractor_id',
        'admin_id',
        'title_ar',
        'title_en',
        'title_id',
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
        'is_featured',
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
    // BELONGS TO BOOK CATEGORY
    public function bookCat()
    {
        return $this->belongsTo(BookCat::class)->withDefault();
    }
    // BELONGS TO BOOK SUB CATEGORY
    public function bookSubCat()
    {
        return $this->belongsTo(BookSubCat::class)->withDefault();
    }
    // BELONGS TO PROGRAM CATEGORY
    public function instractor()
    {
        return $this->belongsTo(Instractor::class)->withDefault();
    }


}
