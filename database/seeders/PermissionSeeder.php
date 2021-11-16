<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Permission::truncate();

        foreach ($this->getPermissions() as $permission) {
            if ( $permission instanceof Permission ){
                $permission->save();
            }

            if ( ! $permission instanceof Permission  && is_array($permission) ){
                Permission::create($permission);
            }

        }
    }

    private function getPermissions()
    {
        return [
           
            new Permission([
                'slug' => 'view_user',
                'group' => 'user',
                'description' => 'View All user',
            ]),
            new Permission([
                'slug' => 'show_user',
                'group' => 'user',
                'description' => 'show single user',
            ]),
            new Permission([
                'slug' => 'create_user',
                'group' => 'user',
                'description' => 'create new user',
            ]),
            new Permission([
                'slug' => 'edit_user',
                'group' => 'user',
                'description' => 'edit user',
            ]),
            new Permission([
                'slug' => 'delete_user',
                'group' => 'user',
                'description' => 'delete user',
            ]),
            new Permission([
                'slug' => 'view_role',
                'group' => 'role',
                'description' => 'View All role',
            ]),
            new Permission([
                'slug' => 'show_role',
                'group' => 'role',
                'description' => 'show role',
            ]),
            new Permission([
                'slug' => 'create_role',
                'group' => 'role',
                'description' => 'create role',
            ]),
            new Permission([
                'slug' => 'edit_role',
                'group' => 'role',
                'description' => 'edit role',
            ]),
            new Permission([
                'slug' => 'delete_role',
                'group' => 'role',
                'description' => 'delete role',
            ]),
            

            
        ];
    }
}