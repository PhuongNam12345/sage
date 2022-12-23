<?php

namespace App\Controllers\Modules;

class ModTrusted
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
