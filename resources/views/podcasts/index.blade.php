@extends('layouts.app')

@section('content')
    <div class="w-full visibility-none lg:w-1/4 pr-6 mt-8 mb-4">
        <div class="text-center">
            <img src="{{ $podcast_info->images->thumb }}"
                 alt="Yesaya Software"
                 class="rounded-full h-48 w-48 mr-2">
        </div>

        <div class="text-2xl">
            <a href="https://yesaya.software"
               class="text-black">
                {{ $podcast_info->title }}
            </a>
        </div>

        <div class="mb-4">
            Inaletwa na <span class="font-bold">{{ $podcast_info->author }}</span>
        </div>

        <div class="mb-4">
            {{ $podcast_info->description }}
        </div>

        <div class="mb-2">
            <i class="fa fa-link fa-lg text-grey-darker"></i>

            <a href="https://{{ $podcast_info->website }}">
                {{ $podcast_info->website }}
            </a>
        </div>

        <div class="mb-4">
            <i class="fa fa-user fa-lg text-grey mr-1"></i>

            <a href="#">
                {{ $users->count() }} joined the community
            </a>
        </div>

        <div class="mb-4">
            @foreach ($users as $user)
                <a href="{{ route('profile', $user) }}">
                    <img src="{{ $user->thumbnail_path }}"
                         class="rounded-full h-12 w-12"
                         alt="{{ $user->name }}">
                </a>
            @endforeach
        </div>

        <div class="mb-4">
            <i class="fa fa-image fa-lg text-grey mr-1"></i>

            <a href="#">
                Recent Posts
            </a>
        </div>

        <div class="mb-4">
            @foreach ($posts as $post)
                <a href="{{ $post->path() }}">
                    <img src="{{ $post->thumbnail_path }}"
                         class="h-20 w-20 mr-1 mb-1"
                         alt="Post thumbnails">
                </a>
            @endforeach
        </div>
    </div>

    <div class="w-full lg:w-1/2 bg-white mb-4">
        @include('partials._features')

        @foreach($feed as $podcast)
            <div class="flex border-b border-solid border-grey-light">
                <div class="p-3">
                    <div class="text-xs text-grey-dark">
                        {{ $podcast->author }}
                    </div>

                    <div class="flex justify-between mb-4">
                        <div>
                            <span class="font-bold">
                                <a href="#"
                                   class="text-black">
                                    Toleo No. {{ $podcast->number }}
                                </a>
                            </span>

                            <span class="text-grey-dark">{{ $podcast->title }}</span>
                        </div>

                        <div>
                            <span class="text-grey-dark">
                                {{ Carbon\Carbon::parse($podcast->published_at)->diffForHumans() }}
                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4">
                            <p class="mb-6">
                                {{ $podcast->description }}
                            </p>

                            <div class="flex border border-solid border-grey-light rounded">
                                <iframe frameborder='0'
                                        height='200px'
                                        scrolling='no'
                                        seamless
                                        src='https://embed.simplecast.com/{{ substr($podcast->sharing_url, 25) }}?color=f5f5f5'
                                        width='100%'></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('partials._trending')
@endsection
