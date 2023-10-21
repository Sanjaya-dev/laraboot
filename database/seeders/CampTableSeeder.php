<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'Gila-Belajar',
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'Baru-Mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
            ]
                
        ];

        //1st method seeder
        // foreach($camp as $key => $camp){
        //     Camp::create($camp);
        // }

        // 2st method query builder
        Camp::insert($camp);
    }
}
