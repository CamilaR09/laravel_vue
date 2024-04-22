<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el rol "estudiantes"
        $role_estudiante = Role::create(['name' => 'estudiante']);
        
        // Crear el rol "coordinador"
        $role_coordinador = Role::create(['name' => 'coordinador']);

        $permission_create_role = Permission::create(['name'=> 'create roles']);
        $permission_read_role = Permission::create(['name' => 'read roles']);
        $permission_update_role = Permission::create(['name' => 'update roles']);
        $permission_delete_role = Permission::create(['name' => 'delete roles']);

        $permission_create_semester = Permission::create(['name'=> 'create semesters']);
        $permission_read_semester = Permission::create(['name' => 'read semesters']);
        $permission_update_semester = Permission::create(['name' => 'update semesters']);
        $permission_delete_semester = Permission::create(['name' => 'delete semesters']);

        $permission_create_asignatura = Permission::create(['name'=> 'create  asignatura']);
        $permission_read_asignatura = Permission::create(['name' => 'read asignatura']);
        $permission_update_asignatura = Permission::create(['name' => 'update asignatura']);
        $permission_delete_asignatura = Permission::create(['name' => 'delete asignatura']);

        $permission_create_axsemeste = Permission::create(['name'=> 'create axsemeste']);
        $permission_read_axsemeste = Permission::create(['name' => 'read axsemeste']);
        $permission_update_axsemeste = Permission::create(['name' => 'update axsemeste']);
        $permission_delete_axsemeste = Permission::create(['name' => 'delete axsemeste']);

        $permissions_admin = [
            $permission_create_role,
            $permission_read_role,
            $permission_update_role,
            $permission_delete_role,
            $permission_create_semester,
            $permission_read_semester,
            $permission_update_semester,
            $permission_delete_semester,
            $permission_create_asignatura,
            $permission_read_asignatura,
            $permission_update_asignatura,
            $permission_delete_asignatura,
            $permission_create_axsemeste,
            $permission_read_axsemeste,
            $permission_update_axsemeste,
            $permission_delete_axsemeste,
        ];

        $permissions_lector = [
            $permission_read_asignatura,
            $permission_read_axsemeste,
        ];

        $role_coordinador->syncPermissions($permissions_admin);
        $role_estudiante->syncPermissions($permissions_lector);


    }
}
