<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Yesaya Software') }}
    </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body class="bg-grey-light font-sans">
<div class="bg-white">
    <div class="container mx-auto flex flex-col lg:flex-row items-center py-2">
        <nav class="w-full lg:w-2/5">
            <a href="#"
               class="top-nav-item">
                <i class="fa fa-home fa-lg"></i> Home
            </a>

            <a href="#"
               class="top-nav-item">
                <i class="fa fa-newspaper fa-lg"></i> Posts
            </a>

            <a href="#"
               class="top-nav-item">
                <i class="fa fa-bolt fa-lg"></i> Threads
            </a>

            <a href="#"
               class="top-nav-item">
                <i class="fa fa-bell fa-lg"></i> Notifications
            </a>
        </nav>

        <div class="w-full lg:w-1/5 text-center my-4 lg:my-0">
            <a href="#">
                <img src="{{ asset('svg/logo.svg') }}"
                     class="h-8 w-8"
                     alt="{{ config('app.name', 'Yesaya Software') }}">
            </a>
        </div>

        <div class="w-full lg:w-2/5 flex lg:justify-end">
            <div class="mr-4 relative">
                <input type="text"
                       class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full"
                       placeholder="Search Post">

                <span class="flex items-center absolute pin-r pin-y mr-3">
                            <i class="fa fa-search text-grey"></i>
                        </span>
            </div>

            <div class="mr-4">
                <a href="#">
                    <img src="{{ asset('img/yesaya.jpg') }}"
                         class="h-8 w-8 rounded-full"
                         alt="Yesaya R. Athuman">
                </a>
            </div>

            <div>
                <button class="bg-teal hover:bg-teal-dark text-white .text-xs .font-bold py-2 px-4 rounded-full">
                    Tweet
                </button>
            </div>
        </div>
    </div>
</div>

<div class="hero h-64 bg-cover h-112"></div>

<div class="bg-white shadow">
    <div class="container mx-auto flex flex-col lg:flex-row items-center lg:relative">
        <div class="w-full lg:w-1/4">
            <img src="{{ asset('/img/yesaya.jpg') }}"
                 class="rounded-full h-48 w-48 lg:absolute lg:pin-l lg:pin-t lg:-mt-24"
                 alt="Yesaya R. Athuman">
        </div>

        <div class="w-full lg:w-1/2">
            <ul class="list-reset flex">
                <li class="text-center py-2 px-4 border-b-2 border-solid border-teal">
                    <a href="#" class="text-grey-darker hover:no-underline">
                        <div class="text-xs font-bold mb-1">
                            Tweets
                        </div>

                        <div class="text-lg font-bold text-teal">
                            60
                        </div>
                    </a>
                </li>

                <li class="text-center py-2 px-4 border-b-2 border-solid hover:border-teal">
                    <a href="#" class="text-grey-darker hover:no-underline">
                        <div class="text-xs font-bold mb-1">
                            Following
                        </div>

                        <div class="text-lg font-bold hover:text-teal">
                            4
                        </div>
                    </a>
                </li>

                <li class="text-center py-2 px-4 border-b-2 border-solid hover:border-teal">
                    <a href="#" class="text-grey-darker hover:no-underline">
                        <div class="text-xs font-bold mb-1">
                            Followers</div>

                        <div class="text-lg font-bold hover:text-teal">
                            3,852</div>
                    </a>
                </li>

                <li class="text-center py-2 px-4 border-b-2 border-solid hover:border-teal">
                    <a href="#" class="text-grey-darker hover:no-underline">
                        <div class="text-xs font-bold mb-1">
                            Likes
                        </div>

                        <div class="text-lg font-bold hover:text-teal">
                            9
                        </div>
                    </a>
                </li>

                <li class="text-center py-2 px-4 border-b-2 border-solid hover:border-teal">
                    <a href="#" class="text-grey-darker hover:no-underline">
                        <div class="text-xs font-bold mb-1">
                            Moments
                        </div>

                        <div class="text-lg font-bold hover:text-teal">
                            1
                        </div>
                    </a>
                </li>

            </ul>
        </div>

        <div class="w-full lg:w-1/4 flex my-4 lg:my-0 lg:justify-end items-center">
            <div class="mr-6">
                <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">
                    Following
                </button>
            </div>

            <div>
                <a href="#" class="text-grey-dark">
                    <i class="fa fa-ellipsis-v fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto flex flex-col lg:flex-row mt-3 text-sm leading-normal">
    @include('partials._about')

    <div class="w-full lg:w-1/2 bg-white mb-4">
        <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
            <a href="#" class="text-black mr-6">
                Tweets
            </a>

            <a href="#" class="mr-6">
                Tweets &amp; replies
            </a>

            <a href="#" class="mr-6">
                Media
            </a>
        </div>

        <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
            <div class="w-1/8 text-right pl-3 pt-3">
                <div>
                    <i class="fa fa-thumbtack text-teal mr-2"></i>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/yesaya.jpg') }}"
                             class="rounded-full w-12 h-12 mr-2"
                             alt="Yesaya R. Athuman">
                    </a>
                </div>
            </div>

            <div class="w-7/8 p-3 pl-4">
                <div class="text-xs text-grey-dark">
                    Pinned Tweet
                </div>

                <div class="flex justify-between">
                    <div>
                                <span class="font-bold">
                                    <a href="#"
                                       class="text-black">
                                        Yesaya R. Athuman
                                    </a>
                                </span>

                        <span class="text-grey-dark">@yesayaathuman</span>
                        <span class="text-grey-dark">&middot;</span>
                        <span class="text-grey-dark">15 Dec 2018</span>
                    </div>

                    <div>
                        <a href="#"
                           class="text-grey-dark hover:text-teal">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <p class="mb-6">
                            Tailwind CSS v0.68.55 is out
                        </p>

                        <p class="mb-6">
                            Makes `apply` more useful when using !important utilities, and includes
                            an improved default color palette:
                        </p>

                        <p class="mb-4">
                            <a href="#">
                                github.com/yesayasoftware
                            </a>
                        </p>

                        <p>
                            <a href="#">
                                <img src="{{ asset('img/post-thumbnail.jpg') }}"
                                     class="border border-solid border-grey-light rounded-sm"
                                     alt="Post image">
                            </a>
                        </p>
                    </div>
                </div>

                <div class="pb-2">
                            <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-blue-light">
                                    <i class="fa fa-comment fa-lg mr-2"></i> 9
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-green">
                                    <i class="fa fa-retweet fa-lg mr-2"></i> 2
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-red">
                                    <i class="fa fa-heart fa-lg mr-2"></i> 4
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-teal">
                                    <i class="fa fa-envelope fa-lg mr-2"></i> 1
                                </a>
                            </span>
                </div>
            </div>
        </div>

        <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
            <div class="w-1/8 text-right pl-3 pt-3">
                <div>
                    <i class="fa fa-thumbtack text-teal mr-2"></i>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/yesaya.jpg') }}"
                             class="rounded-full w-12 h-12 mr-2"
                             alt="Yesaya R. Athuman">
                    </a>
                </div>
            </div>

            <div class="w-7/8 p-3 pl-4">
                <div class="text-xs text-grey-dark">
                    Pinned Tweet
                </div>

                <div class="flex justify-between">
                    <div>
                                <span class="font-bold">
                                    <a href="#"
                                       class="text-black">
                                        Yesaya R. Athuman
                                    </a>
                                </span>

                        <span class="text-grey-dark">@yesayaathuman</span>
                        <span class="text-grey-dark">&middot;</span>
                        <span class="text-grey-dark">15 Dec 2018</span>
                    </div>

                    <div>
                        <a href="#"
                           class="text-grey-dark hover:text-teal">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <p class="mb-6">
                            Tailwind CSS v0.68.55 is out
                        </p>

                        <p class="mb-6">
                            Makes `apply` more useful when using !important utilities, and includes
                            an improved default color palette:
                        </p>

                        <p class="mb-4">
                            <a href="#">
                                github.com/yesayasoftware
                            </a>
                        </p>

                        <p>
                            <a href="#">
                                <img src="{{ asset('img/post-thumbnail.jpg') }}"
                                     class="border border-solid border-grey-light rounded-sm"
                                     alt="Post image">
                            </a>
                        </p>
                    </div>
                </div>

                <div class="pb-2">
                            <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-blue-light">
                                    <i class="fa fa-comment fa-lg mr-2"></i> 9
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-green">
                                    <i class="fa fa-retweet fa-lg mr-2"></i> 2
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-red">
                                    <i class="fa fa-heart fa-lg mr-2"></i> 4
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-teal">
                                    <i class="fa fa-envelope fa-lg mr-2"></i> 1
                                </a>
                            </span>
                </div>
            </div>
        </div>

        <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
            <div class="w-1/8 text-right pl-3 pt-3">
                <div>
                    <i class="fa fa-thumbtack text-teal mr-2"></i>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/yesaya.jpg') }}"
                             class="rounded-full w-12 h-12 mr-2"
                             alt="Yesaya R. Athuman">
                    </a>
                </div>
            </div>

            <div class="w-7/8 p-3 pl-4">
                <div class="text-xs text-grey-dark">
                    Pinned Tweet
                </div>

                <div class="flex justify-between">
                    <div>
                                <span class="font-bold">
                                    <a href="#"
                                       class="text-black">
                                        Yesaya R. Athuman
                                    </a>
                                </span>

                        <span class="text-grey-dark">@yesayaathuman</span>
                        <span class="text-grey-dark">&middot;</span>
                        <span class="text-grey-dark">15 Dec 2018</span>
                    </div>

                    <div>
                        <a href="#"
                           class="text-grey-dark hover:text-teal">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <p class="mb-6">
                            Tailwind CSS v0.68.55 is out
                        </p>

                        <p class="mb-6">
                            Makes `apply` more useful when using !important utilities, and includes
                            an improved default color palette:
                        </p>

                        <p class="mb-4">
                            <a href="#">
                                github.com/yesayasoftware
                            </a>
                        </p>

                        <p>
                            <a href="#">
                                <img src="{{ asset('img/post-thumbnail.jpg') }}"
                                     class="border border-solid border-grey-light rounded-sm"
                                     alt="Post image">
                            </a>
                        </p>
                    </div>
                </div>

                <div class="pb-2">
                            <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-blue-light">
                                    <i class="fa fa-comment fa-lg mr-2"></i> 9
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-green">
                                    <i class="fa fa-retweet fa-lg mr-2"></i> 2
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-red">
                                    <i class="fa fa-heart fa-lg mr-2"></i> 4
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-teal">
                                    <i class="fa fa-envelope fa-lg mr-2"></i> 1
                                </a>
                            </span>
                </div>
            </div>
        </div>

        <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
            <div class="w-1/8 text-right pl-3 pt-3">
                <div>
                    <i class="fa fa-thumbtack text-teal mr-2"></i>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/yesaya.jpg') }}"
                             class="rounded-full w-12 h-12 mr-2"
                             alt="Yesaya R. Athuman">
                    </a>
                </div>
            </div>

            <div class="w-7/8 p-3 pl-4">
                <div class="text-xs text-grey-dark">
                    Pinned Tweet
                </div>

                <div class="flex justify-between">
                    <div>
                                <span class="font-bold">
                                    <a href="#"
                                       class="text-black">
                                        Yesaya R. Athuman
                                    </a>
                                </span>

                        <span class="text-grey-dark">@yesayaathuman</span>
                        <span class="text-grey-dark">&middot;</span>
                        <span class="text-grey-dark">15 Dec 2018</span>
                    </div>

                    <div>
                        <a href="#"
                           class="text-grey-dark hover:text-teal">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <p class="mb-6">
                            Tailwind CSS v0.68.55 is out
                        </p>

                        <p class="mb-6">
                            Makes `apply` more useful when using !important utilities, and includes
                            an improved default color palette:
                        </p>

                        <p class="mb-4">
                            <a href="#">
                                github.com/yesayasoftware
                            </a>
                        </p>

                        <p>
                            <a href="#">
                                <img src="{{ asset('img/post-thumbnail.jpg') }}"
                                     class="border border-solid border-grey-light rounded-sm"
                                     alt="Post image">
                            </a>
                        </p>
                    </div>
                </div>

                <div class="pb-2">
                            <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-blue-light">
                                    <i class="fa fa-comment fa-lg mr-2"></i> 9
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-green">
                                    <i class="fa fa-retweet fa-lg mr-2"></i> 2
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-red">
                                    <i class="fa fa-heart fa-lg mr-2"></i> 4
                                </a>
                            </span>

                    <span class="mr-8">
                                <a href="#"
                                   class="text-grey-dark hover:no-underline hover:text-teal">
                                    <i class="fa fa-envelope fa-lg mr-2"></i> 1
                                </a>
                            </span>
                </div>
            </div>
        </div>

        <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
            <div class="w-1/8 text-right pl-3 pt-3">
                <div>
                    <i class="fa fa-retweet text-grey-dark mr-2"></i>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/yesaya.jpg') }}"
                             alt="Yesaya R. Athuman"
                             class="rounded-full h-12 w-12 mr-2">
                    </a>
                </div>
            </div>

            <div class="w-7/8 p-3 pl-0">
                <div class="text-xs text-grey-dark">
                    Tailwind CSS Retweeted
                </div>

                <div class="flex justify-between">
                    <div>
                                <span class="font-bold">
                                    <a href="#"
                                       class="text-black">
                                        egghead.io
                                    </a>
                                </span>

                        <span class="text-grey-dark">@eggheadio</span>
                        <span class="text-grey-dark">&middot;</span>
                        <span class="text-grey-dark">29 Nov 2017</span>
                    </div>

                    <div>
                        <a href="#"
                           class="text-grey-dark hover:text-teal">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <p class="mb-6">
                            Create a Responsive Card Component by Composing Tailwind's Utility Classes -
                            <a href="#">#html</a> lesson by
                            <a href="#">@simonswiss</a>
                        </p>

                        <div class="flex border border-solid border-grey-light rounded">
                            <div class="w-1/4">
                                <img src="{{ asset('img/sample-ad.jpg') }}"
                                     alt="Play podcast">
                            </div>

                            <div class="w-3/4 p-3">
                                <div class="font-bold mb-1">
                                    egghead Lesson: Abstract utility classes to ...
                                </div>

                                <p class="mb-1">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Temporibus voluptate tempore itaque culpa hic qui nostrum, minus harum
                                    cupiditate a voluptatibus.
                                </p>

                                <div class="text-grey-dark">egghead.io</div>
                            </div>
                        </div>
                    </div>

                    <div class="pb-2">
                                <span class="mr-8">
                                    <a href="#"
                                       class="text-grey-dark hover:no-underline hover:text-blue-light">
                                        <i class="fa fa-comment fa-lg mr-2"></i> 2
                                    </a>
                                </span>

                        <span class="mr-8">
                                    <a href="#"
                                       class="text-grey-dark hover:no-underline hover:text-green">
                                        <i class="fa fa-retweet fa-lg mr-2"></i> 8
                                    </a>
                                </span>

                        <span class="mr-8">
                                    <a href="#"
                                       class="text-grey-dark hover:no-underline hover:text-red">
                                        <i class="fa fa-heart fa-lg mr-2"></i> 24
                                    </a>
                                </span>

                        <span class="mr-8">
                                    <a href="#"
                                       class="text-grey-dark hover:no-underline hover:text-teal">
                                        <i class="fa fa-envelope fa-lg mr-2"></i>
                                    </a>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials._trending')
</div>
</body>
</html>