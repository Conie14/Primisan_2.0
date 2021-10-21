<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\User;
use Spatie\Permission\Models\Permission;

class Roleadmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin  = Role::create(["name"=>"Admin"]);
        $seller = Role::create(["name"=>"Seller"]);
        
        Permission::create(["name"=>'seller.home'])->assignRole($seller);
        Permission::create(["name"=>'admin.home'])->assignRole($admin);
        Permission::create(["name"=>'admin.users.index'])->assignRole($admin);
        Permission::create(["name"=>'admin.users.create'])->assignRole($admin);
        Permission::create(["name"=>'admin.users.edit'])->assignRole($admin);
        Permission::create(["name"=>'admin.users.destroy'])->assignRole($admin);


    }
}
