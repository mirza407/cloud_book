<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Define roles
//        $authorRole = Role::create(['name' => 'author']);
//        $collaboratorRole = Role::create(['name' => 'collaborator']);

        // Define permissions
//        $createSectionPermission = Permission::create(['name'php artisan db:seed --class=RolesAndPermissionsSeeder'delete-section']);

        // Assign permissions to roles
//        $authorRole->givePermissionTo([$createSectionPermission, $editSectionPermission]);
//        $collaboratorRole->givePermissionTo($editSectionPermission);

        // Assign roles to users as needed
        // Example: $user->assignRole('author');


        Permission::create(['name' => 'create-section']);
        Permission::create(['name' => 'edit-section']);
        Permission::create(['name' => 'delete-section']);

        Permission::create(['name' => 'create-subsection']);
        Permission::create(['name' => 'edit-subsection']);
        Permission::create(['name' => 'delete-subsection']);

        $autherRole = Role::create(['name' => 'Author']);
        $collaboratorRole = Role::create(['name' => 'Collaborator']);

        $autherRole->givePermissionTo([
            'create-section',
            'edit-section',
            'delete-section',
            'create-subsection',
            'edit-subsection',
            'delete-subsection',
        ]);

        $collaboratorRole->givePermissionTo([
            'edit-section',
            'edit-subsection'
        ]);
    }
}
