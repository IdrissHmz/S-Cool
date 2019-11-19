<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'module'=>'ARCHI',
                'user_id'=>3
            ],
            [
                'module'=>'IGL',
                'user_id'=>7
            ],
            [
                'module'=>'ORG',
                'user_id'=>8
            ],
        ];
        foreach ($teachers as $teacher){
            Teacher::create(array(
                'module' => $teacher['module'],
                'user_id' => $teacher['user_id'],
            ));
        }
    }
}
