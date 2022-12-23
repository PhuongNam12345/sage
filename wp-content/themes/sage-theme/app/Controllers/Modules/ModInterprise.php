<?php

namespace App\Controllers\Modules;

class ModInterprise
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
