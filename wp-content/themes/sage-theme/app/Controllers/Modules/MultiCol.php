<?php

namespace App\Controllers\Modules;

class MultiCol
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
