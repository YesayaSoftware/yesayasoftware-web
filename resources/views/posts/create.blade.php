@extends('layouts.app')

@section('content')
        {{--@include('partials._about')--}}

        <div class="w-full lg:w-3/4 bg-white mb-4">
            <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
                <span class="text-black">New Post</span>
            </div>

            <div class="flex border-b border-solid border-grey-light">
                <form class="w-full ml-4 mb-10"
                      method="POST"
                      action="{{ route('store-post') }}">
                    @csrf

                    <div class="flex items-center border-b border-b-2 border-yesayasoftware py-2 mb-4 mr-4">
                        <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                               type="text"
                               name="title"
                               placeholder="Building a blog with Laravel"
                               aria-label="Post Title">
                    </div>

                    <div class="flex items-center border-b border-b-2 border-yesayasoftware py-2 mb-4 mr-4">
                        <select name="category_id"
                                id="category_id"
                                class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                                required
                                title="Category">
                            <option value="">
                                Choose Category...
                            </option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center py-2 mb-4">
                        <wysiwyg name="body" class="w-full mr-4"></wysiwyg>
                    </div>

                    <div class="flex items-center py-2 mb-4">
                        <button class="fill-btn">
                            Publish
                        </button>
                    </div>
                </form>
            </div>

        </div>

        @include('partials._trending')

    {{--<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-center">
                    <div class="card-body">
                        <h5 class="card-title">
                            Create a New Post
                        </h5>
                        <hr>

                        <form method="POST" 
                              action="{{ route('store-post') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="channel_id">
                                    Choose a Category:
                                </label>

                                <select name="category_id"
                                        id="category_id"
                                        class="form-control"
                                        required title="Category">
                                    <option value="">
                                        Choose One...
                                    </option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">
                                    Title:
                                </label>

                                <input type="text"
                                       class="form-control"
                                       id="title"
                                       name="title"
                                       value="{{ old('title') }}"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="body">
                                    Body:
                                </label>

                                <wysiwyg name="body"></wysiwyg>
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Publish
                                </button>
                            </div>

                            @if (count($errors))
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
