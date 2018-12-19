@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-center">
                    <div class="card-body">
                        <h5 class="card-title">
                            Create a New Category
                        </h5>
                        <hr>

                        <form method="POST"
                              action="{{ route('store-category') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">
                                    Name:
                                </label>

                                <input type="text"
                                       class="form-control"
                                       id="name"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required
                                       title="Name of the Category">
                            </div>

                            <div class="form-group">
                                <label for="description">
                                    Body:
                                </label>

                                <wysiwyg name="description"></wysiwyg>
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Save
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
    </div>
@endsection
