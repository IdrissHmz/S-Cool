<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students= [
            [
                'promo'=>'1cp',
                'group'=>'1',
                'matricule'=>'127',
                'user_id'=>2,
                'group_id'=>1,
            ],
            [
                'promo'=>'1cp',
                'group'=>'1',
                'matricule'=>'128',
                'user_id'=>4,
                'group_id'=>1,
            ],
            [
                'promo'=>'1cs',
                'group'=>'2',
                'matricule'=>'456',
                'user_id'=>5,
                'group_id'=>2,
            ],
            [
                'promo'=>'1cs',
                'group'=>'2',
                'matricule'=>'654',
                'user_id'=>6,
                'group_id'=>2,
            ]
        ];
        foreach ($students as $student){
            Student::create(array(
                'promo'=>$student['promo'],
                'group'=>$student['group'],
                'matricule'=>$student['matricule'],
                'user_id'=>$student['user_id'],
                'group_id'=>$student['group_id'],
            ));
        }
    }
}
