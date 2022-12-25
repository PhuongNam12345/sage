<section class="  flex justify-center w-full">
    <div class="w-4/5 flex flex-col ">
        <?php $__currentLoopData = $data->module['contentrow']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $im): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="text-center">
            <h3><?php echo e($im->contentcolheading); ?></h3>
            <p><?php echo e($im->contentcolp); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="w-full flex flex-row  ">
            <?php $__currentLoopData = $data->module['contentcol']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full text-center items-center flex flex-col lg:flex-row lg:items-start ">
                    <div class="my-10 w-full items-center flex-col flex md:mr-5">
                        <img class="mb-8 min-w-600 xl:p-0 min-w-854 lg:min-w-726 2xl:min-w-975"
                            src="<?php echo e($item->icon->url); ?>" alt="<?php echo e($item->icon->alt); ?>">
                        <h3><?php echo e($item->contentheading); ?></h3>
                        <p><?php echo e($item->contentp); ?></p>
                        <?php if($item->link->url): ?>
                            <a class="no-underline text-red-200" href="<?php echo e($item->link->url); ?>"
                                target="<?php echo e($item->link->target); ?>"><?php echo e($item->link->title); ?>

                                <span class="icomoon icon-chevron-right w-3"> sss</span>
                            </a>
                        <?php endif; ?>

                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>
