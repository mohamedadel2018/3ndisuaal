<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // HAS PASSWORD
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // HAS MANY PROGRAM CATEGORIES
    public function programCats()
    {
        return $this->hasMany(ProgramCat::class);
    }
    // HAS MANY PROGRAM SUB CATEGORIES
    public function programSubCats()
    {
        return $this->hasMany(ProgramSubCat::class);
    }
    // HAS MANY  INSTRACTORS
    public function instractors()
    {
        return $this->hasMany(Instractor::class);
    }
    // HAS MANY  PROGRAMS
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
    // HAS MANY CONTRIBUTES SHARE CONTENT
    public function contributes()
    {
        return $this->hasMany(Contribute::class);
    }
    public function socials()
    {
        return $this->hasMany(Social::class);
    }
    public function countries()
    {
        return $this->hasMany(Countries::class);
    }
    public function levels()
    {
        return $this->hasMany(Level::class);
    }

    // HAS MANY Encyclopedias (mwso3a)
    public function encyclopedias()
    {
        return $this->hasMany(Encyclopedia::class);
    }
    // HAS MANY Encyclopedias (mwso3a) AIN CAT
    public function encyclopediaCats()
    {
        return $this->hasMany(EncyclopediaCat::class);
    }
    // HAS MANY Encyclopedias (mwso3a) AIN CAT
    public function encyclopediaSubCats()
    {
        return $this->hasMany(EncyclopediaSubCat::class);
    }

    // HAS MANY READS
    public function readCats()
    {
        return $this->hasMany(ReadCat::class);
    }
    // HAS MANY READS
    public function readSubCats()
    {
        return $this->hasMany(ReadSubCat::class);
    }

    // HAS MANY READS
    public function reads()
    {
        return $this->hasMany(Read::class);
    }

    // HAS MANY BOOK CATEGPRY
    public function bookCats()
    {
        return $this->hasMany(BookCat::class);
    }

    // HAS MANY SETTINGS
    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    // HAS MANY PLAYLISTS
    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }


    // HAS MANY NEWS
    public function news()
    {
        return $this->hasMany(News::class);
    }


    // HAS MANY SLIDERS
    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }

    // HAS MANY ABOUTS
    public function abouts()
    {
        return $this->hasMany(About::class);
    }

    // HAS MANY CONTACT INFO DATA
    public function contactInfos()
    {
        return $this->hasMany(ContactInfo::class);
    }





    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // CHECK PERMATIONS
    public function hasPermationTo($permationRoles)
    {
        if (is_array($permationRoles) || is_object($permationRoles)) {
            //            foreach($permationRoles as $prole){
            //           if( $this->roles->contains('name', $prole->name)){
            //               return true;
            //           }
            //        }
            return !!$permationRoles->intersect($this->roles)->count();
        }
        return $this->roles->contains('name', $permationRoles);
    }


    // CHECK USER IS SUPER ADMIN
    public function isSuperAdmin()
    {
        if ($this->hasPermationTo('admin')) {
            return true;
        }
        return false;
    }
}
