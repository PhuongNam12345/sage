<?php

namespace App\Controllers\Modules;

class ModLorem
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
