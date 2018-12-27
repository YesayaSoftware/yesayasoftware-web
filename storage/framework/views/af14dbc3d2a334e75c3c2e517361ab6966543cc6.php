<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">

        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token"
              content="<?php echo e(csrf_token()); ?>">

        <title>
            <?php echo e(config('app.name', 'Yesaya Software')); ?>

        </title>

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldContent('head'); ?>
    </head>

    <body class="bg-grey-light text-base text-grey-darkest font-normal relative">
        <div class="h-2 bg-primary"></div>

        <div class="container mx-auto p-8">
            <div class="mx-auto max-w-sm">
                <div class="py-10 text-center">
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(asset('svg/logo-rounded.svg')); ?>" class="h-12 w-12" alt="Yesaya Software">
                    </a>
                </div>

                <?php echo $__env->yieldContent('content'); ?>

                <div class="text-center mt-4">
                    <p>&copy; Yesaya Software 2018</p>
                </div>
            </div>
        </div>
    </body>
</html>
