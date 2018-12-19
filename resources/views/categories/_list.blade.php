@forelse ($category_list as $category)
    <div class="card">
        <div class="card-header">
            <div class="level">
                <div class="flex">
                    <h4>
                        <a href="{{ $category->path() }}">
                            {{ $category->name }}
                        </a>
                    </h4>
                </div>

                <a href="{{ $category->path() }}">
                    {{ $category->posts->count() }} {{ str_plural('post', $category->posts->count()) }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="body">{!! $category->description !!}</div>
        </div>

        <div class="card-footer">
            Created By: <a href="{{ route('profile', $category->creator) }}">{{ $category->creator->name }}</a>
        </div>
    </div>
    <br>
@empty
    <p>
        There are no relevant results at this time.
    </p>
@endforelse