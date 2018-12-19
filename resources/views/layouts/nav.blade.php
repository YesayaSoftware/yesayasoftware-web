<div class="bg-white shadow">
    <div class="container mx-auto flex flex-col lg:flex-row items-center py-2">
        <nav class="w-full visibility-none { lg:w-2/5">
            @if (Auth::guest())
                <a href="{{ url('/') }}"
                   class="top-nav-item">
                    <i class="fa fa-home fa-lg"></i> Home
                </a>
            @else
                <a href="{{ route('posts') }}"
                   class="top-nav-item">
                    <i class="fa fa-home fa-lg"></i> Home
                </a>
            @endif
        </nav>

        <div class="w-full lg:w-1/5 text-center my-4 lg:my-0">
            <a href="{{ url('/') }}">
                <img src="{{ asset('svg/logo-rounded.svg') }}"
                     class="h-8 w-8"
                     alt="{{ config('app.name', 'Yesaya Software') }}">
            </a>
        </div>

        <div class="w-full visibility-none lg:w-2/5 flex lg:justify-end">
            @if (Auth::guest())
                <div>
                    <a href="#"
                       class="top-nav-item">
                        Contacts
                    </a>
                    {{--<a href="{{ route('login') }}"
                       class="top-nav-item">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="top-nav-item">
                        Register
                    </a>--}}
                </div>
            @else
                {{--<user-notifications></user-notifications>--}}

                <div class="mr-4 relative">
                    <input type="text"
                           class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full outline-none"
                           placeholder="Search Post">

                    <span class="flex items-center absolute pin-r pin-y mr-3">
                        <i class="fa fa-search text-grey"></i>
                    </span>
                </div>

                <div class="mr-4">
                    <a href="{{ route('profile', Auth::user()) }}">
                        <img src="{{ auth()->user()->thumbnail_path }}"
                             class="h-8 w-8 rounded-full"
                             alt="{{ auth()->user()->name }}">
                    </a>
                </div>

                <div class="mt-2">
                    <a class="bg-teal hover:bg-teal-dark text-white .text-xs .font-bold py-2 px-4 rounded-full"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form"
                          action="{{ route('logout') }}"
                          method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>