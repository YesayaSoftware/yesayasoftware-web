<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->make('partials._meta', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <title>
            <?php echo e(config('app.name')); ?>

        </title>

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


        <?php echo $__env->yieldContent('head'); ?>
    </head>

    <body class="onboarding">
        <div class="container">
            <div class="pt-8 mb-4">
                <div class="flex lg:justify-between lg:items-center">
                    <a href="<?php echo e(route('root')); ?>" class="flex items-center sm:mb-5">
                        <img class="h-10 w-10" src="<?php echo e(asset('svg/logo-rounded.svg')); ?>" alt="Yesaya Software">

                        <span class="text-white font-light ml-5 text-2xl"><?php echo e(config('app.name')); ?></span>
                    </a>

                    <div class="text-white font-thin">
                        <?php echo $__env->yieldContent('auth-link'); ?>
                    </div>
                </div>
            </div>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html>
