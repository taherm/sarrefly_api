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
                'address' => NULL,
                'civil_id' => NULL,
                'mobile' => NULL,
                'country' => NULL,
                'password' => '$2y$10$4HpaSplJUuGEtwG5Y0VO.eeOJGHDUcWq.dsLbBhlwNLZ/Xnnb4Omm',
                'api_token' => NULL,
                'remember_token' => 'BeTFnoT6CqF490uY4HSl3qVLGr3noE0xVjmcaXaZuiWgKdVz6dA6ts3qdDc7',
                'created_at' => '2018-12-26 10:55:20',
                'updated_at' => '2018-12-26 10:55:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'tm',
                'email' => 'hah@h.com',
                'address' => 'gava',
                'civil_id' => 84584,
                'mobile' => 2454,
                'country' => 'kuwait',
                'password' => '12',
                'api_token' => 'ggh9w2ffznsfvgvbkhmwy7',
                'remember_token' => NULL,
                'created_at' => '2019-03-08 07:35:31',
                'updated_at' => '2019-03-08 07:35:31',
            ),
        ));
        
        
    }
}