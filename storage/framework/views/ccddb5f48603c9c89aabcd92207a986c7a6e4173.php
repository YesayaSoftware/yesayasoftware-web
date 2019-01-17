<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials._about', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="w-full lg:w-1/2 bg-white mb-4">
        <?php echo $__env->make('partials._features', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
                <div class="w-1/8 visibility-none text-right pl-3 pt-3">
                    <div>
                        <i class="fa fa-thumbtack text-yesayasoftware mr-2"></i>
                    </div>

                    <div>
                        <a href="<?php echo e(route('profile', $post->creator)); ?>">
                            <img src="<?php echo e($post->creator->thumbnail_path); ?>"
                                 class="rounded-full w-12 h-12 mr-2"
                                 alt="<?php echo e($post->creator->name); ?>">
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-7/8 p-3 pl-4">
                    <div class="text-xs text-grey-dark">
                        <?php echo e($post->category->name); ?>

                    </div>

                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold">
                                <a href="<?php echo e(route('profile', $post->creator)); ?>"
                                   class="text-black">
                                    <?php echo e($post->creator->name); ?>

                                </a>
                            </span>

                            

                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark"><?php echo e($post->created_at->diffForHumans()); ?></span>
                        </div>

                        <div>
                            <a href="#"
                                  class="text-grey-dark hover:text-yesayasoftware flex justify-end">
                                    <i class="fa fa-chevron-down"></i>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4">
                            <div class="text-xl lg:text-2xl">
                                <a href="<?php echo e($post->path()); ?>">
                                    <?php echo $post->title; ?>

                                </a>
                            </div>

                            <p>
                                <?php echo $post->body; ?>

                            </p>

                            <p>
                                <a href="<?php echo e($post->path()); ?>">Read More</a>
                            </p>

                            <p class="mt-4">
                                <a href="<?php echo e($post->path()); ?>">
                                    <img src="<?php echo e($post->thumbnail_path); ?>"
                                         class="border border-solid border-grey-light rounded-sm"
                                         alt="Post image">
                                </a>
                            </p>
                        </div>
                    </div>

                    
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
                <p>
                    There are no relevant results at this time.
                </p>
            </div>
        <?php endif; ?>
        <?php echo e($posts->render()); ?>

    </div>

    <?php echo $__env->make('partials._trending', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>