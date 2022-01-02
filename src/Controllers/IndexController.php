<?php

namespace Quadrogod\Abc\Pages\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Quadrogod\Abc\Pages\Models\Page;

class IndexController extends BaseController
{
    public function index(Page $page)
    {
        return view('pages::index');
    }
}
