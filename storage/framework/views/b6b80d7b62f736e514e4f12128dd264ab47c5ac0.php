<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->make('partials._meta', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <title>
            <?php echo e(config('app.name')); ?>

        </title>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <!-- Styles -->
        <link rel="icon" type="image/png" href="https://s3.amazonaws.com/yesayasoftware/public/logo.png">

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('vendor/trix.css')); ?>" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Scripts -->
        <script>
            window.App = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                'user' => Auth::user(),
                'signedIn' => Auth::check()
            ]); ?>;
        </script>

        <?php echo $__env->yieldContent('head'); ?>
    </head>

    <body class="bg-grey-light font-sans">
        <div id="app">
            <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <main class="container mx-auto flex flex-col lg:flex-row mt-3 text-sm leading-normal">
                <?php echo $__env->yieldContent('content'); ?>
            </main>

            <flash message="<?php echo e(session('flash')); ?>"></flash>
        </div>
    </body>
</html>
