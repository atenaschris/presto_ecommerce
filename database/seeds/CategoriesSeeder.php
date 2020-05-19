<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['auto','informatica','fotografia','elettrodomestici','arredamento','giardinaggio','musiche e film','sports','telefonia','nautica'];
         foreach ($categories as $category) {
            DB::table('categories')->insert([

                'name' => $category ,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now(),

               
            ]);
            
         }
     

    }
}
