<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {
       User::create([
        'name'=>'Denilson Regino',
        'email'=>'denilson@gmail.com',
        'password'=> bcrypt('123456789')
       ])->assignRole('admin');

       User::create([
        'name'=>'Ricardo',
        'email'=>'ricardo@gmail.com',
        'password'=> bcrypt('123456789')
       ])->assignRole('cliente');

       User::create([
        'name'=>'Juan',
        'email'=>'juan@gmail.com',
        'password'=> bcrypt('123456789')
       ])->assignRole('proveedor');
    }
    
}
