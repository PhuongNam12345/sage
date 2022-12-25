<?php

namespace App\Controllers\Modules;

class ThreePost
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
