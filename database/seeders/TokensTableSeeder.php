<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tokens')->delete();
        
        \DB::table('tokens')->insert(array (
            0 => 
            array (
                'id' => '1',
                'created_at' => '2021-07-18 11:59:09.553',
                'updated_at' => '2021-07-18 11:59:09.553',
                'token' => 'Shared/IDL:IceSess\\/SessMgr:1\\.0.IDL/Common/!ICESMS\\/RESA!ICESMSLB\\/RES.LB!1626609549794!646!289!1',
            ),
        ));
        
        
    }
}