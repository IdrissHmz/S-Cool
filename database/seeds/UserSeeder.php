<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                //id = 1
                'first_name'=>'idriss',
                'last_name'=>'hamzaoui',
                'email'=>'hi_hamzaoui@esi.dz',
                'password'=>bcrypt('pass1'),
                'user_type'=>'0'
            ],
            [
                //id = 2
                'first_name'=>'oussama',
                'last_name'=>'kheroubi',
                'email'=>'ho_kheroubi@esi.dz',
                'password'=>bcrypt('pass2'),
                'user_type'=>'2'
            ],
            [
                //id = 3
                'first_name'=>'khalifa',
                'last_name'=>'serraye',
                'email'=>'hk_serraye@esi.dz',
                'password'=>bcrypt('pass3'),
                'user_type'=>'1'
            ],
            [
                //id = 4
                'first_name'=>'nassim',
                'last_name'=>'bakchiche',
                'email'=>'hn_bakchiche@esi.dz',
                'password'=>bcrypt('pass4'),
                'user_type'=>'2'
            ],
            [
                //id = 5
                'first_name'=>'noufel',
                'last_name'=>'vladimir',
                'email'=>'hn_vladimir@esi.dz',
                'password'=>bcrypt('pass5'),
                'user_type'=>'2'
            ],
            [
                //id = 6
                'first_name'=>'sadek',
                'last_name'=>'daylimotion',
                'email'=>'hs_daylimotion@esi.dz',
                'password'=>bcrypt('pass6'),
                'user_type'=>'2'
            ],
            [
                //id = 7
                'first_name'=>'lamia',
                'last_name'=>'selmane',
                'email'=>'hl_selmane@esi.dz',
                'password'=>bcrypt('pass7'),
                'user_type'=>'1'
            ],
            [
                //id = 8
                'first_name'=>'baha',
                'last_name'=>'lakeb',
                'email'=>'hb_lakeb@esi.dz',
                'password'=>bcrypt('pass8'),
                'user_type'=>'1'
            ],
        ];

        foreach ($users as $user){
            User::create(array(
                'first_name'=>$user['first_name'],
                'last_name'=>$user['last_name'],
                'email'=>$user['email'],
                'password'=>$user['password'],
                'user_type'=>$user['user_type'],
            ));
        }
    }
}
