<?php

namespace Quadrogod\Abc\Pages\Interfaces;

interface IPage {
    public function hasPageable();
    public function getUrl();
    public function getUniqueRouteName();
}
