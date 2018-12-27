<?php $__env->startComponent('profiles.activities.activity'); ?>
    <?php $__env->slot('creator'); ?>
        <div class="text-xs text-grey-dark">
            <?php echo e($activity->subject->category->name); ?>

        </div>

        <div class="flex justify-between">
            <div>
                <span class="font-bold">
                    <a href="<?php echo e(route('profile', $activity->subject->creator)); ?>"
                       class="text-black">
                        <?php echo e($activity->subject->creator->name); ?>

                    </a>
                </span>

                

                <span class="text-grey-dark">&middot;</span>
                <span class="text-grey-dark"><?php echo e($activity->subject->created_at->diffForHumans()); ?></span>
            </div>

            <div>
                <a href="#"
                   class="text-grey-dark hover:text-yesayasoftware flex justify-end">
                    <i class="fa fa-chevron-down"></i>
                </a>
            </div>
        </div>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('heading'); ?>
        <a href="<?php echo e($activity->subject->path()); ?>" class="text-xl lg:text-2xl">
            <?php echo e($activity->subject->title); ?>

        </a>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('body'); ?>
        <?php echo $activity->subject->body; ?>


        <p>
            <a href="<?php echo e($activity->subject->path()); ?>">Read More</a>
        </p>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


