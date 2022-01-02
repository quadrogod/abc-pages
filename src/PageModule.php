<?php

namespace Quadrogod\Abc\Pages;

use Illuminate\Support\Facades\Route;
use Quadrogod\Abc\Pages\Controllers\PageController;
use Quadrogod\Abc\Pages\Interfaces\IModule;
use Quadrogod\Abc\Pages\Interfaces\IPage;

class PageModule implements IModule
{
    public function registerRoutes(IPage $page)
    {
        $base_url = '/' . $page->getUrl();
        Route::get($base_url, [PageController::class, 'index'])->name($page->getUniqueRouteName());
        // example
        Route::get("$base_url/{category}", [PageController::class, 'category'])->name('pages.category');
    }
}
