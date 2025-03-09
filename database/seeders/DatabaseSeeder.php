<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            HeadlineSeeder::class,
            TagSeeder::class,
            AssignTagsWorks::class,
            PermissionSeeder::class
        ]);

        $admin = Role::create([
            'name' => 'admin'
        ]);

        $admin->givePermissions(Permission::pluck('id')->toArray());

        $user->addRole($admin);
    }
}