<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
              'user_id'=>1
            ]
        ];
        foreach ($admins as $admin){
            Admin::create(array(
                'user_id'=>$admin['user_id']
            ));
        }
    }
}
