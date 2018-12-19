@forelse ($posts as $post)
    <div class="card">
        <div class="card-header">
            <div class="level">
                <div class="flex">
                    <h4>
                        <a href="{{ $post->path() }}">
                            @if (auth()->check() && $post->hasUpdatesFor(auth()->user()))
                                <strong>
                                    {{ $post->title }}
                                </strong>
                            @else
                                {{ $post->title }}
                            @endif
                        </a>
                    </h4>
                </div>

                <a href="{{ $post->path() }}">
                    {{ $post->comment_count }} {{ str_plural('comment', $post->comment_count) }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="body">{!! $post->body !!}</div>
        </div>

        <div class="card-footer">
            <div class="level">
                <span class="flex">
                    {{ $post->visits }} Visits
                </span>

                <small>
                    Posted By: <a href="{{ route('profile', $post->creator) }}">{{ $post->creator->name }}</a>
                </small>
            </div>

        </div>
    </div>
    <br>
@empty
    <p>
        There are no relevant results at this time.
    </p>
@endforelse