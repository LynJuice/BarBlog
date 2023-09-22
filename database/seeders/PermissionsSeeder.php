<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'manage users']);

        Permission::create(['name' => 'write review']);

        Permission::create(['name' => 'manage reviews']);
        Permission::create(['name' => 'publish reviews']);

        // create roles 
        $role1 = Role::create(['name' => 'vartotojas']);
        $role2 = Role::create(['name' => 'redaktorius']);
        $role3 = Role::create(['name' => 'administratorius']);

        // and assign existing permissions
        $role1->givePermissionTo('write review');

        $role2->givePermissionTo('write review');
        $role2->givePermissionTo('manage reviews');
        $role2->givePermissionTo('publish reviews');

        $role3->givePermissionTo('write review');
        $role3->givePermissionTo('manage reviews');
        $role3->givePermissionTo('publish reviews');
        $role3->givePermissionTo('publish reviews');
        $role3->givePermissionTo('manage users');
    
        // create demo users
        $user = User::factory()->create([
            'name' => 'Vartotojas Redaktorius',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'name' => 'vartotojas Administratorius',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role3);

       
    }
}
