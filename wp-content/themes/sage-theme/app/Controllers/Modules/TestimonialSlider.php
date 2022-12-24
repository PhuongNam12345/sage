<?php

namespace App\Controllers\Modules;

class TestimonialSlider
{
    public function dataModule($module)
    {

        $pos=get_field('postion',$module->ID);
        $data = ['pos'];
        return (object) [           
            'module' => $module,    
            'testimonial1'=>$module['testimonial1']      
        ];
    }
}
