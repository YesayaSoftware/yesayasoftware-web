@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/jquery.atwho.css') }}">
@endsection

@section('content')
    <post-view :post="{{ $post }}" inline-template>
        <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-3/4 bg-white mb-4">
                @include('partials._features')

                <div class="flex border-b border-solid border-grey-light">
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
                                    {!! $post->title !!}
                                </div>

                                <p>
                                    {!! $post->body !!}
                                </p>

                                <p class="mt-4">
                                    @if (Auth::guest())
                                        <img src="{{ $post->thumbnail_path }}"
                                             class="w-full border border-solid border-grey-light rounded-sm"
                                             alt="Post image">
                                    @else
                                        <post-image-form :post="post" :user="{{ auth()->user() }}"></post-image-form>
                                    @endif
                                </p>
                            </div>
                        </div>

                        {{--<div class="flex pb-2">
                            <div class="w-1/2">
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
                                       class="text-grey-dark hover:no-underline hover:text-yesayasoftware">
                                        <i class="fa fa-envelope fa-lg mr-2"></i> 1
                                    </a>
                                </span>
                            </div>

                            <div class="w-1/2 flex justify-end"></div>
                        </div>--}}

                        <div class="pb-2 border-t border-solid border-grey-light">
                            <comments @added="commentsCount++"
                                      @removed="commentsCount--"></comments>
                        </div>
                    </div>
                </div>
            </div>

            @include('partials._trending')
        </div>
    </post-view>
@endsection
