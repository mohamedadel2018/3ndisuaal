<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Read extends Model
{
    use HasFactory;
    protected $fillable = [
        'read_cat_id',
        'read_sub_cat_id',
        'country_id',
        'level_id',
        'program_id',
        'name',
        'phone',
        'email',
        'id_number',
        'type',
        'good_time',
        'is_archived',
    ];

    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

    // BELONGS TO READ CAT
    public function readCat()
    {
        return $this->belongsTo(ReadCat::class)->withDefault();
    }


    // BELONGS TO READ SUB CAT
    public function readSubCat()
    {
        return $this->belongsTo(ReadSubCat::class)->withDefault();
    }


    // BELONGS TO COUNTRY
    public function country()
    {
        return $this->belongsTo(Country::class)->withDefault();
    }

    // BELONGS TO level
    public function level()
    {
        return $this->belongsTo(Level::class)->withDefault();
    }

    // BELONGS TO PROGRAM
    public function program()
    {
        return $this->belongsTo(Program::class)->withDefault();
    }
}
