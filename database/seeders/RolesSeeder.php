<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //create role "Employee" for users
        $roles = [
            'Client',
            'Admin',
            
        // Add more roles as needed
        ];

        foreach ($roles as $role) {
            $existed_role=Role::where('name' , $role)->first();
            if(!$existed_role){
                Role::create(['name' => $role]);
            }
        }
        $admin_role = Role::where('name','Admin')->first();
        

        $permissions = Permission::pluck('id', 'id')->all();

        $admin_role->syncPermissions($permissions);
        $user1 = User::create([
            'name' => 'Admin1',
            'username'=>'admin1',
            'email' => 'admin1@gmail.com',
        
           
          
            'password' => Hash::make('gmadmin159!48@26#1'),
        ]);
        $user2 = User::create([
            'name' => 'Admin2',
            'username'=>'admin2',
            'email' => 'admin2@gmail.com',
            
           
          
            'password' => Hash::make('gmadmin159!48@26#2'),
        ]);
        $user3 = User::create([
            'name' => 'Admin3',
            'username'=>'admin3',
            'email' => 'admin3@gmail.com',
            
            'password' => Hash::make('gmadmin159!48@26#3'),
        ]);
        $user4 = User::create([
            'name' => 'Admin4',
            'username'=>'admin4',
            'email' => 'admin4@gmail.com',
        
            'password' => Hash::make('gmadmin159!48@26#4'),
        ]);
        $user5 = User::create([
            'name' => 'Admin5',
            'username'=>'admin5',
            'email' => 'admin5@gmail.com',
            
            'password' => Hash::make('gmadmin159!48@26#5'),
        ]);

        

        $user1->assignRole([$admin_role->id]);
        $user2->assignRole([$admin_role->id]);
        $user3->assignRole([$admin_role->id]);
        $user4->assignRole([$admin_role->id]);
        $user5->assignRole([$admin_role->id]);

        
    }
}