<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookSubCat extends Model
{
    use HasFactory, MyMedia;
    protected $fillable = [
        'book_cat_id',
        'name_ar',
        'name_en',
        'name_id',
        'admin_id',
    ];


    // BELONGS TO BOOK CATEGORY
    public function bookCat()
    {
        return $this->belongsTo(BookCat::class)->withDefault();
    }

    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

    // HAS MANY  BOOKS
    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
