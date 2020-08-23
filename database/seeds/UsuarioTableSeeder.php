<?php

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Usuario(
            [
                'nome' => 'Fiec',
                'email' => 'homologacao@fiec.ce.org.br',
                'password' => Hash::make('fiec55'),
                'profile' => "ADMIN"
            ]
        );
        $user->save();
    }
}
