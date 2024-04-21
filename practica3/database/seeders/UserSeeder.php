<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Jetstream;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear dos usuarios

        $user1 = User::create([
            'name' => 'user',
            'email' => 'usuarioDomingo@example.com',
            'password' => Hash::make('user123456'),
        ]);

        $user2 = User::create([
            'name' => 'admin',
            'email' => 'adminDomingo@example.com',
            'password' => Hash::make('admin123456'),
        ]);

        //Crear un equipo
        $team = $user2->ownedTeams()->create([
            'name' => 'administrador',
            'personal_team' => false,
        ]);

        //Asignar el equipo al primer usuario
        $user2->switchTeam($team);

        //Obtener el rol directamente
        $roleName = 'administrador';

        //Asignar el rol al primer usuario del equipo
        $team->users()->updateExistingPivot($user2->id, ['role' => $roleName]);

        $this->command->info('Usuarios y equipos sembrados exitosamente');
    }
}
