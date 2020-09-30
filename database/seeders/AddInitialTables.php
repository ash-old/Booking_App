<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Seeder;

class AddInitialTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            [
                "name" => "Big Table",
                "covers" => 10,
            ],
            [
                "name" => "Medium Table",
                "covers" => 5,
            ],
            [
                "name" => "Small Table",
                "covers" => 2,
            ]
        ];

        foreach ($seeds as $seed) {
            $table = new Table();
            $table->name = $seed['name'];
            $table->covers = $seed['covers'];
            $table->save();
        }
    }
    
    
}
