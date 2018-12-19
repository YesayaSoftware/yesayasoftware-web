<div class="flex border-b border-solid border-grey-light hover:bg-grey-lighter">
    <div class="w-1/8 visibility-none text-right pl-3 pt-3">
        <div>
            <i class="fa fa-thumbtack text-yesayasoftware mr-2"></i>
        </div>

        <div>
            {{--<a href="{{ route('profile', $post->creator) }}">
                <img src="{{ $post->creator->thumbnail_path }}"
                     class="rounded-full w-12 h-12 mr-2"
                     alt="{{ $post->creator->name }}">
            </a>--}}
        </div>
    </div>

    <div class="w-full lg:w-7/8 p-3 pl-4">
        {{ $creator }}

        <div>
            <div class="mb-4">

                <div>
                    {!! $heading !!}
                </div>

                <p>
                    {!! $body !!}
                </p>

                <p>
                    {{--<a href="{{ $post->path() }}">Read More</a>--}}
                </p>

                <p class="mt-4">
                    <a href="#">
                        {{--<img src="{{ $post->thumbnail_path }}"
                             class="border border-solid border-grey-light rounded-sm"
                             alt="Post image">--}}
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

