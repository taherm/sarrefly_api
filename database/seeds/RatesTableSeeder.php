<?php

use Illuminate\Database\Seeder;

class RatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rates')->delete();
        
        \DB::table('rates')->insert(array (
            0 => 
            array (
                'id' => 2,
                'country' => 'Saudia Arabia',
                'rate' => '12.38',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'country' => 'UAE',
                'rate' => '12.11',
                'created_at' => '2019-01-05 12:37:24',
                'updated_at' => '2019-01-05 12:37:24',
            ),
            2 => 
            array (
                'id' => 5,
                'country' => 'Bahrain',
                'rate' => '1.23',
                'created_at' => '2019-01-08 11:30:25',
                'updated_at' => '2019-01-08 11:30:25',
            ),
            3 => 
            array (
                'id' => 6,
                'country' => 'Oman',
                'rate' => '1.26',
                'created_at' => '2019-01-08 11:30:57',
                'updated_at' => '2019-01-08 11:30:57',
            ),
            4 => 
            array (
                'id' => 7,
                'country' => 'Qatar',
                'rate' => '12.00',
                'created_at' => '2019-01-08 11:31:32',
                'updated_at' => '2019-01-08 11:31:32',
            ),
            5 => 
            array (
                'id' => 8,
                'country' => 'India',
                'rate' => '231.53',
                'created_at' => '2019-01-08 11:32:09',
                'updated_at' => '2019-01-08 11:32:09',
            ),
            6 => 
            array (
                'id' => 9,
                'country' => 'Egypt',
                'rate' => '59.13',
                'created_at' => '2019-01-08 11:33:01',
                'updated_at' => '2019-01-08 11:33:01',
            ),
            7 => 
            array (
                'id' => 10,
                'country' => 'Philippines',
                'rate' => '173.21',
                'created_at' => '2019-01-08 11:33:50',
                'updated_at' => '2019-01-08 11:33:50',
            ),
            8 => 
            array (
                'id' => 11,
                'country' => 'USA',
                'rate' => '3.29',
                'created_at' => '2019-01-08 11:34:19',
                'updated_at' => '2019-01-08 11:34:19',
            ),
            9 => 
            array (
                'id' => 12,
                'country' => 'Euro',
                'rate' => '2.88',
                'created_at' => '2019-01-08 11:34:50',
                'updated_at' => '2019-01-08 11:34:50',
            ),
            10 => 
            array (
                'id' => 13,
                'country' => 'Pound',
                'rate' => '2.58',
                'created_at' => '2019-01-08 11:35:15',
                'updated_at' => '2019-01-08 11:35:15',
            ),
        ));
        
        
    }
}