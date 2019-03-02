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

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'address' => null,
                'civil_id' => null,
                'mobile' => null,
                'country' => null,
                'password' => '$2y$10$4HpaSplJUuGEtwG5Y0VO.eeOJGHDUcWq.dsLbBhlwNLZ/Xnnb4Omm',
                'api_token' => null,
                'remember_token' => 'BNvwMVJpGRIYf5K5zDjes2Re07aEFhKfZp5vv6HSjvjgpacdKhrvXMWStlUA',
                'created_at' => '2018-12-26 10:55:20',
                'updated_at' => '2018-12-26 10:55:20',
            )
        ));
    }
}
