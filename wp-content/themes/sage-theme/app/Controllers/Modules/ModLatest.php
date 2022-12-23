<?php

namespace App\Controllers\Modules;

class ModLatest
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
