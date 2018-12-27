

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/jquery.atwho.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <post-view :post="<?php echo e($post); ?>" inline-template>
        <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-3/4 bg-white mb-4">
                <?php echo $__env->make('partials._features', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="flex border-b border-solid border-grey-light">
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
                                    <?php echo $post->title; ?>

                                </div>

                                <p>
                                    <?php echo $post->body; ?>

                                </p>

                                <p class="mt-4">
                                    <?php if(Auth::guest()): ?>
                                        <img src="<?php echo e($post->thumbnail_path); ?>"
                                             class="w-full border border-solid border-grey-light rounded-sm"
                                             alt="Post image">
                                    <?php else: ?>
                                        <post-image-form :post="post" :user="<?php echo e(auth()->user()); ?>"></post-image-form>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>

                        

                        <div class="pb-2 border-t border-solid border-grey-light">
                            <comments @added="commentsCount++"
                                      @removed="commentsCount--"></comments>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('partials._trending', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </post-view>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>