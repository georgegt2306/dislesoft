<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Unidad;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* User::factory(10)->create(); */
        $rol = Role::create(['name' => 'administrador']);
        $rolEstudiante = Role::create(['name' => 'estudiante']);
        $rolProfesor = Role::create(['name' => 'docente']);
        
        $permiso = Permission::create(['name' => 'usuarios']);
        $rol->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'roles']);
        $rol->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'permisos']);
        $rol->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'abecedario']);
        $rolEstudiante->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'ejercicio1']);
        $rolEstudiante->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'ejercicio2']);
        $rolEstudiante->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'ejercicio3']);
        $rolEstudiante->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'ejercicio4']);
        $rolEstudiante->givePermissionTo($permiso);

        $permiso = Permission::create(['name' => 'unidad1']);
        $rolEstudiante->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'unidad2']);
        $rolEstudiante->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'unidad3']);
        $rolEstudiante->givePermissionTo($permiso);
        $permiso = Permission::create(['name' => 'unidad4']);
        $rolEstudiante->givePermissionTo($permiso);
        
        for ($i=1; $i < 5; $i++)
        { 
            $unidad = New Unidad;
            $unidad->nombre_unidad = $i;
            $unidad->save();
        }

        $user = new User;
        $user->name = 'Christian Chuquisala';
        $user->email = 'cristian@gmail.com';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        /* $user->profile_photo_path = public_path('iconos/img_administrador.png'); */
        $user->save();

        $user->assignRole($rol);

        $this->call(UserSeeder::class);
        $this->call(ParameterSeeder::class);
    }
}
