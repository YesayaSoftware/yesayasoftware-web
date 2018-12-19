@extends('layouts.app')

@section('content')
    <div class="w-full lg:w-1/4 pad-l pr-6 mt-8 mb-4">
        <div class="text-center mb-4">
            <avatar-form :user="{{ $profileUser }}"></avatar-form>
        </div>

        <div class="mb-4">
            A community learning platform inspired by professional life and experience by Yesaya.
        </div>

        <div class="mb-2">
            <i class="fa fa-link fa-lg text-grey-darker"></i>

            <a href="{{ route('profile', $profileUser) }}">
                {{ '@' . $profileUser->username }}
            </a>
        </div>

        <div class="mb-4">
            <i class="fa fa-calendar fa-lg text-grey-darker"></i>

            <a href="#">
                Since {{ $profileUser->created_at->diffForHumans() }}
            </a>
        </div>
    </div>

    <div class="w-full lg:w-3/4 bg-white mb-4">
        @forelse ($activities as $date => $activity)
            <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
                {{ $date }}
            </div>

            @foreach ($activity as $record)
                @if (view()->exists("profiles.activities.{$record->type}"))
                    @include ("profiles.activities.{$record->type}", ['activity' => $record])
                @endif
            @endforeach
        @empty
            <p>There is no activity for this user yet.</p>
        @endforelse
    </div>
@endsection