<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'address' => 'Kuwait Al Soor Street Jasmine Tower Floor 18 Office 18c',
                'civil_id' => 44333434,
                'mobile' => 7788667,
                'country' => 'Kuwait',
                'password' => '$2y$10$EtjInW60Sqkk5r2tJ1ITTOXLkz/zSK/6kq4dUng5dqeBSnr9lNlXu',
                'remember_token' => 'REdjCqFBgABBWwOTV89xNzO132OGELjsAfmv3jGQiNxA8SVPuHyCRP9WxiuL',
                'created_at' => '2018-12-06 06:35:08',
                'updated_at' => '2018-12-06 06:35:08',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'john',
                'email' => 'john@gmail.com',
                'address' => 'Bnied Al-Gar Al Salam Street Hospital Block 5,Building #12,Floor 2 ',
                'civil_id' => 555555555,
                'mobile' => 44444444,
                'country' => 'india',
                'password' => '1234',
                'remember_token' => NULL,
                'created_at' => '2018-12-06 08:04:45',
                'updated_at' => '2018-12-06 09:49:09',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Jacob',
                'email' => 'jacob@jj.com',
                'address' => 'Shaab, Manamah St,Block 2, House #4.',
                'civil_id' => 332322323,
                'mobile' => 66777666,
                'country' => 'Kuwait',
                'password' => '1234',
                'remember_token' => NULL,
                'created_at' => '2018-12-06 09:19:19',
                'updated_at' => '2018-12-06 09:19:19',
            ),
        ));
        
        
    }
}