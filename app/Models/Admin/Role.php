<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Traits\HasPermission;
use App\Models\Admin\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    use HasFactory,HasPermission;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function hasPermission($permissionId)
    {
        return $this->permissions()->where('role_id',$this->id)->where('permission_id',$permissionId)->first();
    }
}
