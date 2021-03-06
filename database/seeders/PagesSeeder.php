<?php

namespace Quadrogod\Abc\Pages\Database\Seeders;

use Illuminate\Database\Seeder;
use Quadrogod\Abc\Pages\Models\Page;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //@todo: сделать создание через модель, и туда вшить поддержку дерева
        Page::create([
            'name' => 'Index Page',
            'title' => 'Index Page',
            'url' => 'index',
            'route_name' => 'pages.index',
            'module' => 'Quadrogod\\Abc\\Pages\\IndexModule',
            'display' => true,
            'menu1' => true,
            'parent' => 0,
            'left_key' => 1,
            'right_key' => 2,
            'level' => 1,
        ]);

        Page::create([
            'name' => 'Text Page',
            'title' => 'Text Page',
            'url' => 'pages',
            'route_name' => 'pages.text',
            'module' => 'Quadrogod\\Abc\\Pages\\PageModule',
            'display' => true,
            'menu1' => true,
            'parent' => 0,
            'left_key' => 3,
            'right_key' => 4,
            'level' => 1,
        ]);
    }
}
