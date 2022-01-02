<?php

namespace Quadrogod\Abc\Pages\Models;

use Illuminate\Database\Eloquent\Model;
use Quadrogod\Abc\Pages\Interfaces\IPage;
use Quadrogod\Abc\Pages\Traits\HasPageable;
use Quadrogod\Abc\Core\Models\Traits\HasVisibility;

class Page extends Model implements IPage {

    use HasVisibility, HasPageable;

    protected $fillable = [
        'name', 'url', 'title', 'description', 'text', 'module', 'display',
        'noindex', 'h1', 'menu1', 'menu2',
    ];
}
