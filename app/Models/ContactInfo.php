<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'phone',
        'admin_id',
    ];

    // BELONGS TO ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class)->withDefault();
    }

}
