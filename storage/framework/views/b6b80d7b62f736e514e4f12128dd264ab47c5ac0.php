<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">

        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="<?php echo e(config('app.name')); ?>">
        <meta itemprop="description" content="A community learning platform inspired by professional life and experience by Yesaya.">
        <meta itemprop="image" content="https://s3.us-east-1.amazonaws.com/yesayasoftware/public/post-thumbnails/s0Jzejo31zw33nFMfwhGSKItZ3zUBD3waFP0BNMS.jpeg">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="https://s3.us-east-1.amazonaws.com/yesayasoftware/public/post-thumbnails/s0Jzejo31zw33nFMfwhGSKItZ3zUBD3waFP0BNMS.jpeg">
        <meta name="twitter:site" content="@yesayasoftware">
        <meta name="twitter:title" content="Yesaya Software">
        <meta name="twitter:description" content="A community learning platform inspired by professional life and experience by Yesaya.">
        <meta name="twitter:creator" content="@yesayasoftware">

        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="https://s3.us-east-1.amazonaws.com/yesayasoftware/public/post-thumbnails/s0Jzejo31zw33nFMfwhGSKItZ3zUBD3waFP0BNMS.jpeg">

        <!-- Open Graph data -->
        <meta property="og:title" content="<?php echo e(config('app.name')); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://www.yesaya.software/" />
        <meta property="og:image" content="https://s3.us-east-1.amazonaws.com/yesayasoftware/public/post-thumbnails/s0Jzejo31zw33nFMfwhGSKItZ3zUBD3waFP0BNMS.jpeg" />
        <meta property="og:description" content="A community learning platform inspired by professional life and experience by Yesaya." />
        <meta property="og:site_name" content="<?php echo e(config('app.name')); ?>" />

        <!-- CSRF Token -->
        <meta name="csrf-token"
              content="<?php echo e(csrf_token()); ?>">

        <title>
            <?php echo e(config('app.name')); ?>

        </title>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <!-- Styles -->
        <link rel="icon"
              type="image/png"
              href="https://s3.amazonaws.com/yesayasoftware/public/logo.png">

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
