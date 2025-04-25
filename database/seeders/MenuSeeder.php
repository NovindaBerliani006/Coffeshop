<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'name' => 'CEO Secret',
                'description' => 'Espresso dengan susu steamed dan sirup Vanilla',
                'price' => 25000,
                'image' => 'm1.png'
            ],
            [
                'name' => 'Island Breeze',
                'description' => 'Espresso dengan campuran sirup coconuts',
                'price' => 22000,
                'image' => 'm2.png'
            ],
            [
                'name' => 'Royal Treatment',
                'description' => 'Espresso dengan susu steamed dan sirup Hazelnut',
                'price' => 38000,
                'image' => 'm3.png'
            ],
            [
                'name' => 'Master Creation',
                'description' => 'Sebuah kopi racikan special dari barista',
                'price' => 35000,
                'image' => 'm4.png'
            ],
            [
                'name' => 'Archipelago',
                'description' => 'Espresso dengan susu steamed dan chocolate premium',
                'price' => 30000,
                'image' => 'm5.png'
            ],
            [
                'name' => 'Space Trail',
                'description' => 'Espresso double shot dengan air',
                'price' => 20000,
                'image' => 'm6.png'
            ],
            [
                'name' => 'Caramel Latte',
                'description' => 'Espresso dengan susu steamed dan sirup Caramel',
                'price' => 30000,
                'image' => 'm7.png'
            ],
            [
                'name' => 'Long Black',
                'description' => 'Espresso double shot dengan air',
                'price' => 18000,
                'image' => 'm8.png'
            ]
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}