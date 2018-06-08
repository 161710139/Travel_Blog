<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $memberRole = new Role();
        $memberRole->name="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        $superadminRole = new Role();
        $superadminRole->name="super_admin";
        $superadminRole->display_name="SuperAdmin";
        $superadminRole->save();

        $superadmin = new User();
        $superadmin->name = "Super Admin";
        $superadmin->email = "superadmin@gmail.com";
        $superadmin->password = bcrypt('rahasia');
        $superadmin->save();
        $superadmin->attachRole($superadminRole);

        $member = new User();
        $member->name = "member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
