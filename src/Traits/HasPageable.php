<?php

namespace Quadrogod\Abc\Pages\Traits;

use Quadrogod\Abc\Pages\Interfaces\IPage;

trait HasPageable {

    public function hasPageable()
    {
        return is_a($this, IPage::class);
    }

    public function getUrl()
    {
        return $this->url ?? null;
    }

    public function getUniqueRouteName() {
        return $this->route_name ?? null;
    }
}
