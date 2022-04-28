<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::where('id',1)->delete();
        $user = User::where('id',1)->first();
        if($user){
            $user->removeRole(1);
            $user->delete();
        }
        
        
        $role = Role::create([
            'id' => '1',
            'name' => User::ROLE_ADMIN,
            'description' => 'admin have all permission'
        ]);

        $user = User::create([
            'id' => '1',
            'name' => 'admin',
            'email' => 'dashboard@focusgroup.com',
            'password' => bcrypt('UVxBcHb?7Cfpn4j')
        ]);

        $user->assignRole($role->id);
    }
}
