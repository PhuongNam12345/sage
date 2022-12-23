<?php

namespace App\Controllers\Modules;

class ModSilder6icon
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'content'=>$module['content'],
            'icon'=>$module['icon']
        ];
    }
}
