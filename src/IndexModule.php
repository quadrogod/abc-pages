<?php

namespace Quadrogod\Abc\Pages;

use Illuminate\Support\Facades\Route;
use Quadrogod\Abc\Pages\Controllers\IndexController;
use Quadrogod\Abc\Pages\Interfaces\IModule;
use Quadrogod\Abc\Pages\Interfaces\IPage;

class IndexModule implements IModule
{
    public function registerRoutes(IPage $page)
    {
        $base_url = '/' . $page->getUrl();
//        $base_url = '/';
        Route::get($base_url, [IndexController::class, 'index'])
            ->name($page->getUniqueRouteName());
    }
}
