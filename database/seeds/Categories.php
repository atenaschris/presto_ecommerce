<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['sedie','tavoli','lampadari','elettrodomestici','tappeti','giardinaggio','cucine','bagno','garage','piscina'];
         foreach ($categories as $category) {
            DB::table('categories')->insert([

                'name' => $category ,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),

               
            ]);
            
         }
     

    }
}
