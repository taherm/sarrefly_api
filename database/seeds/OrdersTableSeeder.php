<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'user_id' => 7,
                'id' => 1,
                'receiver_name' => 'john',
                'receiver_mobile' => 32322,
                'receiver_address' => 'Kuwait city, mubarak al kabeer st., crystal tower.',
                'civil_id' => 333233223,
                'country' => 'kuwait',
                'amount' => 21,
                'order_type' => 'cash withdrawal ',
                'status' => 'pending',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'user_id' => 6,
                'id' => 2,
                'receiver_name' => 'jaku',
                'receiver_mobile' => 44444,
                'receiver_address' => 'baki',
                'civil_id' => 4444444,
                'country' => 'srilanka',
                'amount' => 21,
                'order_type' => 'Western Union',
                'status' => 'pending',
                'created_at' => NULL,
                'updated_at' => '2018-12-06 07:54:16',
            ),
            2 => 
            array (
                'user_id' => 6,
                'id' => 3,
                'receiver_name' => 'Ahmed',
                'receiver_mobile' => 898998989,
                'receiver_address' => 'Dubai',
                'civil_id' => 5665566,
                'country' => 'Kuwait',
                'amount' => 53,
                'order_type' => 'Send Cash',
                'status' => 'pending',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}