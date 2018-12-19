@extends('layouts.app')

@section('content')
    @include('partials._about')

    <div class="w-full lg:w-1/2 bg-white mb-4">
        @include('partials._features')

        @forelse ($posts as $post)
            <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
                <div class="w-1/8 visibility-none text-right pl-3 pt-3">
                    <div>
                        <i class="fa fa-thumbtack text-yesayasoftware mr-2"></i>
                    </div>

                    <div>
                        <a href="{{ route('profile', $post->creator) }}">
                            <img src="{{ $post->creator->thumbnail_path }}"
                                 class="rounded-full w-12 h-12 mr-2"
                                 alt="{{ $post->creator->name }}">
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-7/8 p-3 pl-4">
                    <div class="text-xs text-grey-dark">
                        {{ $post->category->name }}
                    </div>

                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold">
                                <a href="{{ route('profile', $post->creator) }}"
                                   class="text-black">
                                    {{ $post->creator->name }}
                                </a>
                            </span>

                            {{--<span class="text-grey-dark">
                                <a href="{{ route('profile', $post->creator) }}">
                                    {{ '@' . $post->creator->username }}
                                </a>
                            </span>--}}

                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">{{ $post->created_at->diffForHumans() }}</span>
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
                                <a href="{{ $post->path() }}">
                                    {!! $post->title !!}
                                </a>
                            </div>

                            <p>
                                {!! $post->body !!}
                            </p>

                            <p>
                                <a href="{{ $post->path() }}">Read More</a>
                            </p>

                            <p class="mt-4">
                                <a href="{{ $post->path() }}">
                                    <img src="{{ $post->thumbnail_path }}"
                                         class="border border-solid border-grey-light rounded-sm"
                                         alt="Post image">
                                </a>
                            </p>
                        </div>
                    </div>

                    {{--<div class="pb-2">
                        <span class="mr-8">
                            <a href="#"
                               class="text-grey-dark hover:no-underline hover:text-blue-light">
                                <i class="far fa-comment fa-lg mr-2"></i> 9
                            </a>
                        </span>

                        <span class="mr-8">
                            <a href="#"
                               class="text-grey-dark hover:no-underline hover:text-red">
                                <i class="far fa-heart fa-lg mr-2"></i> 4
                            </a>
                        </span>
                    </div>--}}
                </div>
            </div>
        @empty
            <div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
                <p>
                    There are no relevant results at this time.
                </p>
            </div>
        @endforelse
        {{ $posts->render() }}
    </div>

    @include('partials._trending')
@endsection
