<?php

namespace Quadrogod\Abc\Pages;

use Quadrogod\Abc\Pages\Models\Page;

class Repository
{
    function getPages()
    {
        return Page::visible()->get();
    }

    function getModules()
    {
        return Page::all();
    }
}
