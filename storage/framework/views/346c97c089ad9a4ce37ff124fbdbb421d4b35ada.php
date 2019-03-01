<?php $__env->startSection('content'); ?>
    <div class="w-full lg:w-1/4 pad-l pr-6 mt-8 mb-4">
        <div class="text-center mb-4">
            <avatar-form :user="<?php echo e($profileUser); ?>"></avatar-form>
        </div>

        <div class="mb-4">
            A community learning platform inspired by professional life and experience by Yesaya.
        </div>

        <div class="mb-2">
            <i class="fa fa-link fa-lg text-grey-darker"></i>

            <a href="<?php echo e(route('profile', $profileUser)); ?>">
                <?php echo e('@' . $profileUser->username); ?>

            </a>
        </div>

        <div class="mb-4">
            <i class="fa fa-calendar fa-lg text-grey-darker"></i>

            <a href="#">
                Since <?php echo e($profileUser->created_at->diffForHumans()); ?>

            </a>
        </div>
    </div>

    <div class="w-full lg:w-3/4 bg-white mb-4">
        <?php $__empty_1 = true; $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
                <?php echo e($date); ?>

            </div>

            <?php $__currentLoopData = $activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(view()->exists("profiles.activities.{$record->type}")): ?>
                    <?php echo $__env->make("profiles.activities.{$record->type}", ['activity' => $record], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>There is no activity for this user yet.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>