<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use App\Models\admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\rumahsakit;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::all();

        //get role admin
        //role admin ana neng id  5
        $role = Role::find(5);

        // masukna id 5 dengan nama role adin 
        //assign permission to role
        $role->syncPermissions($permissions);

        //assign role to user
        //user id 4 dimasukan ke role admin 
        $user = User::find(4);
        $user->assignRole($role);

        //get role leader
        $role = Role::find(2);
        $role->syncPermissions([
            'artikel.index',
            'artikel.create',
            'artikel.edit',
            'artikel.delete',
            'konsultasi.index',
            'konsultasi.create',
            'konsultasi.edit',
            'konsultasi.delete',

        ]);
    }
}
