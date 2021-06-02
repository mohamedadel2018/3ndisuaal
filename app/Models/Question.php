<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'encyclopedia_cat_id',
        'encyclopedia_sub_cat_id',
        'email',
        'question',
        'answer',
        'code',
        'is_read',
    ];

    // BELONGS TO EncyclopediaCat
    public function encyclopediaCat()
    {
        return $this->belongsTo(EncyclopediaCat::class)->withDefault();
    }
    // BELONGS TO EncyclopediaSubCat
    public function encyclopediaSubCat()
    {
        return $this->belongsTo(EncyclopediaSubCat::class)->withDefault();
    }
}
