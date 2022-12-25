<?php

namespace App\Controllers\Modules;

class ConnectingYour
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
