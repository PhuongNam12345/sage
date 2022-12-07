<?php

namespace App\Controllers\Modules;

class ModSlider
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
