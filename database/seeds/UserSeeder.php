<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'firstname' => 'Dimitris',
            'lastname' => 'Andrikopoulos',
            'email' => 'dandre@yahoo.gr',
        ]);
        User::create([
            'firstname' => 'Anne',
            'lastname' => 'Tsirogianni',
            'email' => 'anne@yahoo.gr',
        ]);
        User::create([
            'firstname' => 'George',
            'lastname' => 'Papadakis',
            'email' => 'geo1@yahoo.gr',
        ]);
        User::create([
            'firstname' => 'Gina',
            'lastname' => 'Palaiologou',
            'email' => 'geo2@yahoo.gr',
        ]);User::create([
            'firstname' => 'George',
            'lastname' => 'Vasileiou',
            'email' => 'geo3@yahoo.gr',
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
