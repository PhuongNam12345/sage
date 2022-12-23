<?php $__currentLoopData = $data->module['testimonial']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="slick-slider">
        <div
            class="container relative carousel py-[120px] w-4/5 max-w-[1001px] shadow-2xl rounded-[57px] min-h-[462px] justify-center items-center">
            <div class="w-full flex justify-center md:block">
                <div class="quote md:ml-[14%] ml-[38px] max-w-[659px]">
                    <h2><?php echo e($test->post_content); ?></h2>
                    <p><?php echo e($test->post_title); ?></p>
                    <p> <?php echo e($pos); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
