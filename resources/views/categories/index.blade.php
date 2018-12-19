@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include ('categories._list')
            </div>

            <div class="col-md-4">
                <div class="card">

                </div>
            </div>
        </div>
    </div>
@endsection
