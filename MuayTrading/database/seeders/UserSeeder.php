<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // retrieve the admin and user roles
      $role_admin = Role::where('name', 'admin')->first();
      $role_user = Role::where('name', 'user')->first();
      
      $admin = new User();
      $admin->name = 'Liam Bedford';
      $admin->email = 'lbedford@gmail.com';
      $admin->password = Hash::make('password');
      $admin->save();
     // This user is given the admin role 
      $admin->roles()->attach($role_admin);

      $admin = new User();
      $admin->name = 'John Haggerty';
      $admin->email = 'jhaggerty@gmail.com';
      $admin->password = Hash::make('password');
      $admin->save();
     // this user is given the user role
      $admin->roles()->attach($role_user);
    }
}
