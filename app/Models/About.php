<?php

namespace App\Models;

use App\Traits\MyMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory,MyMedia;
    protected $fillable = [
        'about_ar',
        'about_en',
        'about_id',
        'our_vision_ar',
        'our_vision_en',
        'our_vision_id',
        'our_goals_ar',
        'our_goals_en',
        'our_goals_id',
        'meta_title_ar',
        'meta_title_en',
        'meta_title_id',
        'meta_descrption_ar',
        'meta_descrption_en',
        'meta_descrption_id',
        'admin_id',
    ];

    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }
}
