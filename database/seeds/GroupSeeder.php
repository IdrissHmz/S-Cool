<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'name'=>'1cp',
                'nb_student'=>2,
            ],
            [
                'name'=>'1cs',
                'nb_student'=>2,
            ]
        ];
        foreach ($groups as $group){
            Group::create(array(
                'name'=>$group['name'],
                'nb_student'=>$group['nb_student']
            ));
        }
    }
}
