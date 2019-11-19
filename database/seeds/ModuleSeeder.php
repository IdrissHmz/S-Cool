<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'name'=>'ARCHI',
                'coeff'=> 4,
                'formula'=> '(cf*3 + ci ) / 4'
            ],
            [
                'name'=>'ORG',
                'coeff'=> 3,
                'formula'=> '(cf*3 + ci ) / 4'
            ],
            [
                'name'=>'IGL',
                'coeff'=> 4,
                'formula'=> '(cf*3 + ci ) / 4'
            ],
        ];
        foreach ($modules as $module){
            Module::create(array(
                'name'=>$module['name'],
                'coeff'=>$module['coeff'],
                'formula'=>$module['formula'],
            ));
        }
    }
}
