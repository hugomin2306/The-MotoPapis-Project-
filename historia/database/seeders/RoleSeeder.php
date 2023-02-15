<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{

    public function run()
    {
       $rolAdmin = Role::create(['name' => 'Admin']);
       $rolJugador = Role::create(['name' => 'Jugador']);
       $rolEditor = Role::create(['name' => 'Editor']);

        Permission::create(['name' => 'users.show'])->assignRole($rolAdmin);
        Permission::create(['name' => 'users.edit'])->assignRole($rolAdmin);
        Permission::create(['name' => 'users.index'])->assignRole($rolAdmin,$rolJugador);

        Permission::create(['name' => 'partidas.index'])->syncRoles([$rolAdmin, $rolJugador]);
        Permission::create(['name' => 'partidas.show'])->syncRoles([$rolAdmin, $rolEditor]);
        Permission::create(['name' => 'partidas.create'])->syncRoles([$rolAdmin, $rolEditor]);
        Permission::create(['name' => 'partidas.edit'])->syncRoles([$rolAdmin, $rolEditor]);
        Permission::create(['name' => 'partidas.store'])->syncRoles([$rolAdmin, $rolEditor]);
        Permission::create(['name' => 'partidas.destroy'])->syncRoles([$rolAdmin, $rolEditor]);

        Permission::create(['name' => 'nodos.show'])->syncRoles([$rolAdmin, $rolJugador]);
        Permission::create(['name' => 'nodos.create'])->syncRoles([$rolAdmin, $rolEditor]);
        Permission::create(['name' => 'nodos.index'])->syncRoles([$rolAdmin, $rolEditor]);

        Permission::create(['name' => 'links.index'])->syncRoles([$rolAdmin, $rolEditor]);
        Permission::create(['name' => 'links.edit'])->syncRoles([$rolAdmin, $rolEditor]);
        Permission::create(['name' => 'links.show'])->syncRoles([$rolAdmin, $rolEditor]);
        Permission::create(['name' => 'links.create'])->syncRoles([$rolAdmin, $rolEditor]);

    }
}
