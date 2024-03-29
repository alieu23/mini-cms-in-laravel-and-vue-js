<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name='samuel jackson';
        $user->email='samueljackson@jackson.com';
        $user->password=bcrypt('samuel1234');
        $user->save();
        $user->roles()->attach(Role::where('name','user')->first());

        $admin = new User();
        $admin->name='Neo Ighodaro';
        $admin->email='neo@creativitykills.com';
        $admin->password = bcrypt('neo1234');
        $admin->save();
        $admin->roles()->attach(Role::where('name','admin')->first());

        
    }
}
