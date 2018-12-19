{{-- Question to either edit or view. --}}

{{-- Editing the question. --}}
<div class="card" v-if="editing">
    <div class="card-header">
        <div class="level">
            <input type="text" class="form-control" v-model="form.title" title="Post Title">
        </div>
    </div>

    <div class="card-body">
        <div class="form-group">
            <wysiwyg v-model="form.body"></wysiwyg>
        </div>
    </div>

    <div class="card-footer">
        <div class="level">
            <button class="btn btn-xs level-item"
                    @click="editing = true"
                    v-show="! editing">
                Edit
            </button>

            <button class="btn btn-primary btn-xs level-item"
                    @click="update">
                Update
            </button>

            <button class="btn btn-xs level-item"
                    @click="resetForm">
                Cancel
            </button>

            @if(Auth::check())
                @can ('update', $post)
                    <form action="{{ $post->path() }}" method="POST" class="ml-a">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-link">Delete Post</button>
                    </form>
                @endcan
            @endif

        </div>
    </div>
</div>

{{-- Viewing the question. --}}
<div class="card" v-else>
    <div class="card-header">
        <div class="level">
            <img src="{{ $post->creator->thumbnails }}"
                 alt="{{ $post->creator->name }}"
                 width="25"
                 height="25"
                 class="mr-1">

            <span class="flex">
                <a href="{{ route('profile', $post->creator) }}">
                    {{ $post->creator->name }}
                </a> posted: <span v-text="title"></span>
            </span>
        </div>
    </div>

    <div class="card-body" v-html="body"></div>

    <div class="card-footer" v-if="authorize('owns', post)">
        <button class="btn btn-xs" @click="editing = true">
            Edit
        </button>
    </div>
</div>