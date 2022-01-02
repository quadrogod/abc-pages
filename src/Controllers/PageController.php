<?php

namespace Quadrogod\Abc\Pages\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Quadrogod\Abc\Pages\Models\Page;

class PageController extends BaseController
{
    public function index(Page $page)
    {
        return view('pages::index');
    }

    public function category($category, Request $request)
    {
        return view('pages::category', ['name' => $category]);
    }
}
