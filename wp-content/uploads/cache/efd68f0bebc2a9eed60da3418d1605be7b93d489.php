
<section class="  flex justify-center w-full">
    <div class="w-4/5 flex flex-col lg:flex-row 2xl:w-3/5">
        <div class="w-full ">
            <?php echo e($data->content); ?>

        </div>
        <div class=" relative flex-col-2 fsex items-center w-full justify-center ">
            <?php $__currentLoopData = $data->module['icon']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <img class="icon m-w-40 m-h-30" src=" <?php echo e($item->img->url); ?>}"
                    alt="<?php echo e($item->img->alt); ?>">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
        </div>

    </div>


</section>
