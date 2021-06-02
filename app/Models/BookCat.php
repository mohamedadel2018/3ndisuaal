<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookCat extends Model
{
    use HasFactory;


    use HasFactory, MyMedia;
    protected $fillable = [
        'name_ar',
        'name_en',
        'name_id',
        'admin_id',
    ];


    // HAS MANY BOOK SUB CATEGORIES
    public function bookSubCats()
    {
        return $this->hasMany(BookSubCat::class);
    }


    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

    // HAS MANY  books
    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
