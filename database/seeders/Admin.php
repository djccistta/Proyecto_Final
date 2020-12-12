<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Admin1=User::create([
            'name'=>'Administrador',
            'email'=>'admin@gmail.com',
            'acceso'=>'si',
            'password'=>Hash::make('admin'),
        ]);
    }
}
