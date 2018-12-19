<div class="w-full lg:w-1/4 lg:pl-4">
    <div class="bg-white p-3 mb-3">
        <div>
            <span class="text-lg font-bold">Tutorials</span>
            {{--<span>&middot;</span>

            <span>
                <a href="#" class="text-xs">
                    Refresh
                </a>
            </span>

            <span>&middot;</span>

            <span class="text-xs">
                <a href="#" class="text-xs">
                    View All
                </a>
            </span>--}}
        </div>

        <div class="flex border-b border-solid border-grey-light">
            <div class="py-2">
                <a href="#">
                    <img src="{{ asset('img/post-thumbnail.jpg') }}"
                         class="rounded-full w-12 h-12 mr-2"
                         alt="Yesaya R. Athuman">
                </a>
            </div>

            <div class="pl-2 py-2 w-full">
                <div class="flex justify-between mb-1">
                    <div>
                        <a href="#"
                           class="font-bold text-black">
                            To be updated soon...
                        </a>

                        {{--<a href="#"
                           class="text-grey-dark">
                            TBA...
                        </a>--}}
                    </div>

                    {{--<div>
                        <a href="#"
                           class="text-grey hover:text-grey-dark">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>--}}
                </div>

                <div>
                    <button class="fill-btn">
                        Watch Now
                    </button>
                </div>
            </div>
        </div>

        <div class="flex border-b border-solid border-grey-light">
            <div class="py-4">
                <a href="https://play.google.com/store/apps/details?id=com.yesayasoftware.learning"
                   class="p-1">
                    <i class="fab fa-lg fa-google-play"></i>
                </a>
            </div>

            <div class="pl-2 py-2 w-full">
                <div class="flex justify-between">
                    <div>
                        <a href="https://play.google.com/store/apps/details?id=com.yesayasoftware.learning"
                           class="font-bold text-black">
                            Download the App
                        </a>
                    </div>
                </div>

                <div class="text-xs">
                    Yesaya Software Playstore
                </div>
            </div>
        </div>

        <div class="pt-2">
            <span class="text-xs mr-1">Connect with Us</span>

            <a href="https://instagram.com/yesayasoftware" class="mr-1">
                <i class="fab fa-instagram fa-lg"></i>
            </a>


            <a href="https://facebook.com/yesayasoftware" class="mr-1">
                <i class="fab fa-facebook fa-lg"></i>
            </a>


            <a href="https://twitter.com/yesayasoftware">
                <i class="fab fa-twitter fa-lg"></i>
            </a>
        </div>
    </div>

    <div class="bg-white p-3 mb-3">
        <div class="mb-3">
            <span class="text-lg font-bold">Trends for you</span>

            <span>&middot;</span>

            {{--<span>
                <a href="#"
                   class="text-yesayasoftware text-xs">
                    Change
                </a>
            </span>--}}
        </div>

        <div class="mb-3 leading-tight">
            @if (count($trending))
                @foreach ($trending as $post)
                    <div>
                        <a href="{{ url($post->path) }}"
                           class="text-yesayasoftware font-bold">
                            {{ $post->title }}
                        </a>
                    </div>

                    <div>
                        <a href="#"
                           class="text-grey-dark text-xs">
                            {{ $post->category }}
                        </a>
                    </div>
                @endforeach
            @endif
        </div>

    </div>

    <div class="mb-3 text-xs">
        <span class="mr-2">
            <a href="#"
               class="text-grey-darker">
                &copy; 2018 Yesaya Software
            </a>
        </span>

        <span class="mr-2">
            <a href="#"
               class="text-grey-darker">
                About
            </a>
        </span>

        <span class="mr-2">
            <a href="#"
               class="text-grey-darker">
                Terms
            </a>
        </span>

        <span class="mr-2">
            <a href="#"
               class="text-grey-darker">
                Privacy policy
            </a>
        </span>
    </div>
</div>