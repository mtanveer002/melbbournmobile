<?php

namespace App\Models;

use App\Models\File;
use App\Traits\HasRole;
use App\Models\Admin\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRole;

    const ROLE_ADMIN = "admin";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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

    public function image()
    {
        return $this->belongsTo(File::class, 'image_id');
    }

     public function getImage()
    {
        if ( ! $this->image || ! Storage::exists($this->image->getStoragePath())){
            return asset('backend/images/avatar/avatar-2.png');
        }
        
        return $this->image->getPath();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function isAdmin()
    {
        return $this->hasRole([self::ROLE_ADMIN]);

    }

    
}
