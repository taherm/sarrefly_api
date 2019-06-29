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
                'country' => 'Saudi Riyal 🇸🇦',
                'rate' => '12.38',
                'created_at' => NULL,
                'updated_at' => '2019-06-23 16:19:25',
            ),
            1 => 
            array (
                'id' => 4,
                'country' => 'Emirates Dirham 🇦🇪',
                'rate' => '12.11',
                'created_at' => '2019-01-05 12:37:24',
                'updated_at' => '2019-06-26 15:53:55',
            ),
            2 => 
            array (
                'id' => 5,
                'country' => 'Bahraini Dinar 🇧🇭',
                'rate' => '1.23',
                'created_at' => '2019-01-08 11:30:25',
                'updated_at' => '2019-06-23 16:17:21',
            ),
            3 => 
            array (
                'id' => 6,
                'country' => 'Omani Dinar 🇴🇲',
                'rate' => '1.26',
                'created_at' => '2019-01-08 11:30:57',
                'updated_at' => '2019-06-23 16:17:58',
            ),
            4 => 
            array (
                'id' => 7,
                'country' => 'Qatari Riyal 🇶🇦',
                'rate' => '12.00',
                'created_at' => '2019-01-08 11:31:32',
                'updated_at' => '2019-06-26 15:56:18',
            ),
            5 => 
            array (
                'id' => 8,
                'country' => 'Indian Rupees 🇮🇳',
                'rate' => '231.53',
                'created_at' => '2019-01-08 11:32:09',
                'updated_at' => '2019-06-23 16:18:44',
            ),
            6 => 
            array (
                'id' => 9,
                'country' => 'Egyptian Pound 🇪🇬',
                'rate' => '59.13',
                'created_at' => '2019-01-08 11:33:01',
                'updated_at' => '2019-06-23 16:19:07',
            ),
            7 => 
            array (
                'id' => 10,
                'country' => 'Philippines Peso 🇵🇭',
                'rate' => '173.21',
                'created_at' => '2019-01-08 11:33:50',
                'updated_at' => '2019-06-23 16:20:07',
            ),
            8 => 
            array (
                'id' => 11,
                'country' => 'USD 🇺🇸',
                'rate' => '3.29',
                'created_at' => '2019-01-08 11:34:19',
                'updated_at' => '2019-06-23 16:20:38',
            ),
            9 => 
            array (
                'id' => 12,
                'country' => 'Euro 💶',
                'rate' => '2.88',
                'created_at' => '2019-01-08 11:34:50',
                'updated_at' => '2019-06-23 16:21:49',
            ),
            10 => 
            array (
                'id' => 13,
                'country' => 'Pound Sterling 🏴󠁧󠁢󠁥󠁮󠁧󠁿',
                'rate' => '2.58',
                'created_at' => '2019-01-08 11:35:15',
                'updated_at' => '2019-06-23 16:22:26',
            ),
        ));
        
        
    }
}