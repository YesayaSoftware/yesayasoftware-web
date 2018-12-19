<div class="w-full visibility-none lg:w-1/4 pr-6 mt-8 mb-4">
    <div class="text-center">
        <img src="{{ asset('svg/logo-rounded.svg') }}"
             alt="Yesaya Software"
             class="rounded-full h-48 w-48 mr-2">
    </div>


    <h1>
        <a href="https://yesaya.software"
           class="text-black">
            Yesaya Software
        </a>
    </h1>

    <div class="mb-4">
        Built with Love
    </div>

    <div class="mb-4">
        A community learning platform inspired by professional life and experience by Yesaya.
    </div>

    <div class="mb-2">
        <i class="fa fa-link fa-lg text-grey-darker"></i>

        <a href="https://yesaya.software">
            yesaya.software
        </a>
    </div>

    <div class="mb-4">
        <i class="fa fa-calendar fa-lg text-grey-darker"></i>

        <a href="#">
            Since 2018
        </a>
    </div>

    <div class="mb-4">
        <a href="{{ route('podcasts') }}"
           class="bg-yesayasoftware hover:bg-yesayasoftware-dark text-white font-medium py-2 px-4 rounded-full w-full h-10">
            Listen Podcasts
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