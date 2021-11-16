<?php 

namespace App\Traits;

trait HasRole{

    /**
     * @param array $name
     */
    public function hasRole(array $name=[])
    {
        return $this->roles()->whereIn('name',$name)->count();
    }

    /**
     * @param int|array $roleIds
     */
    public function assignRole($roleIds)
    {
        return $this->roles()->attach($roleIds);
    }

    /**
     * @param int|array $roleId
     */
    public function removeRole($roleIds)
    {
        return $this->roles()->detach($roleIds);
    }

     /**
     * @param string $permission
     */
    public function hasPermissionTo($permission)
    {
        return $this->roles()->whereHas('permissions',function($query) use($permission){
            return $query->where('slug',$permission);
        })
        ->count();
    }

}