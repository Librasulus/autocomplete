<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'firstname' => 'John',
            'lastname' => 'Garfield',
            'email' => 'jgar@gmail.com',
        ]);
        User::create([
            'firstname' => 'Anne',
            'lastname' => 'Owen',
            'email' => 'anne@yahoo.com',
        ]);
        User::create([
            'firstname' => 'George',
            'lastname' => 'Durrell',
            'email' => 'geod@msn.com',
        ]);
        User::create([
            'firstname' => 'Gina',
            'lastname' => 'Lanzit',
            'email' => 'g.lanzit@gmail.com',
        ]);User::create([
            'firstname' => 'Kevin',
            'lastname' => 'Smith',
            'email' => 'smi@outlook.com',
        ]);
    }
}


// A stack method to create multiple records:
// $data = [
//             ['title'=>'Demo Event-1', 'start_date'=>'2017-09-11', 'end_date'=>'2017-09-12'],
//             ['title'=>'Demo Event-2', 'start_date'=>'2017-09-11', 'end_date'=>'2017-09-13'],
//             ['title'=>'Demo Event-3', 'start_date'=>'2017-09-14', 'end_date'=>'2017-09-14'],
//             ['title'=>'Demo Event-3', 'start_date'=>'2017-09-17', 'end_date'=>'2017-09-17'],
//         ];
//         foreach ($data as $key => $value) {
//             Event::create($value);
//         }
