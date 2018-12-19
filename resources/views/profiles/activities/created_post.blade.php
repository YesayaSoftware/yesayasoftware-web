@component('profiles.activities.activity')
    @slot('creator')
        <div class="text-xs text-grey-dark">
            {{ $activity->subject->category->name }}
        </div>

        <div class="flex justify-between">
            <div>
                <span class="font-bold">
                    <a href="{{ route('profile', $activity->subject->creator) }}"
                       class="text-black">
                        {{ $activity->subject->creator->name }}
                    </a>
                </span>

                {{--<span class="text-grey-dark">
                    <a href="{{ route('profile', $activity->subject->creator) }}">
                        {{ '@' . $activity->subject->creator->username }}
                    </a>
                </span>--}}

                <span class="text-grey-dark">&middot;</span>
                <span class="text-grey-dark">{{ $activity->subject->created_at->diffForHumans() }}</span>
            </div>

            <div>
                <a href="#"
                   class="text-grey-dark hover:text-yesayasoftware flex justify-end">
                    <i class="fa fa-chevron-down"></i>
                </a>
            </div>
        </div>
    @endslot

    @slot('heading')
        <a href="{{ $activity->subject->path() }}" class="text-xl lg:text-2xl">
            {{ $activity->subject->title }}
        </a>
    @endslot

    @slot('body')
        {!! $activity->subject->body !!}

        <p>
            <a href="{{ $activity->subject->path() }}">Read More</a>
        </p>
    @endslot
@endcomponent


