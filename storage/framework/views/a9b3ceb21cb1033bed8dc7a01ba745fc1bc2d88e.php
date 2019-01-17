<?php $__env->startSection('content'); ?>
    <div class="w-full visibility-none lg:w-1/4 pr-6 mt-8 mb-4">
        <div class="text-center">
            <img src="<?php echo e($podcast_info->images->thumb); ?>"
                 alt="Yesaya Software"
                 class="rounded-full h-48 w-48 mr-2">
        </div>

        <div class="text-2xl">
            <a href="https://yesaya.software"
               class="text-black">
                <?php echo e($podcast_info->title); ?>

            </a>
        </div>

        <div class="mb-4">
            Inaletwa na <span class="font-bold"><?php echo e($podcast_info->author); ?></span>
        </div>

        <div class="mb-4">
            <?php echo e($podcast_info->description); ?>

        </div>

        <div class="mb-2">
            <i class="fa fa-link fa-lg text-grey-darker"></i>

            <a href="https://<?php echo e($podcast_info->website); ?>">
                <?php echo e($podcast_info->website); ?>

            </a>
        </div>

        <div class="mb-4">
            <i class="fa fa-user fa-lg text-grey mr-1"></i>

            <a href="#">
                <?php echo e($users->count()); ?> joined the community
            </a>
        </div>

        <div class="mb-4">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('profile', $user)); ?>">
                    <img src="<?php echo e($user->thumbnail_path); ?>"
                         class="rounded-full h-12 w-12"
                         alt="<?php echo e($user->name); ?>">
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="mb-4">
            <i class="fa fa-image fa-lg text-grey mr-1"></i>

            <a href="#">
                Recent Posts
            </a>
        </div>

        <div class="mb-4">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($post->path()); ?>">
                    <img src="<?php echo e($post->thumbnail_path); ?>"
                         class="h-20 w-20 mr-1 mb-1"
                         alt="Post thumbnails">
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="w-full lg:w-1/2 bg-white mb-4">
        <?php echo $__env->make('partials._features', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php $__currentLoopData = $feed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $podcast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex border-b border-solid border-grey-light">
                <div class="p-3">
                    <div class="text-xs text-grey-dark">
                        <?php echo e($podcast->author); ?>

                    </div>

                    <div class="flex justify-between mb-4">
                        <div>
                            <span class="font-bold">
                                <a href="#"
                                   class="text-black">
                                    Toleo No. <?php echo e($podcast->number); ?>

                                </a>
                            </span>

                            <span class="text-grey-dark"><?php echo e($podcast->title); ?></span>
                        </div>

                        <div>
                            <span class="text-grey-dark">
                                <?php echo e(Carbon\Carbon::parse($podcast->published_at)->diffForHumans()); ?>

                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4">
                            <p class="mb-6">
                                <?php echo e($podcast->description); ?>

                            </p>

                            <div class="flex border border-solid border-grey-light rounded">
                                <iframe frameborder='0'
                                        height='200px'
                                        scrolling='no'
                                        seamless
                                        src='https://embed.simplecast.com/<?php echo e(substr($podcast->sharing_url, 25)); ?>?color=f5f5f5'
                                        width='100%'></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php echo $__env->make('partials._trending', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>