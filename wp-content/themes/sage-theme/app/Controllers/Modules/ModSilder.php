<?php

namespace App\Controllers\Modules;

class ModSilder
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
