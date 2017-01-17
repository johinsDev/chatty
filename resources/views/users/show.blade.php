@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-lg-5">
                @include('users.partials._block')
            </div>
            <div class="col-lg-4 col-lg-offset-3">
                @if (auth()->user()->hasFriendRequestPending($user))
                    <p>Waiting for {{ $user->NameOrUsername }} to accept your request</p>
                @elseif( auth()->user()->hasFriendRequestReceived() )
                    <a href="" class="btn btn-primary">Accept friend request.</a>
                @elseif(auth()->user()->isFriendsWith($user))
                    <p>You and {{ $user->NameOrUsername }} are friends.</p>
                @else
                    <a href="" class="btn btn-primary">Add as friend</a>
                @endif
                <h4>{{ $user->username }}´s friends</h4>
                @if(!$user->friends()->count())
                    <p>{{ $user->NameOrUsername }} has no friends</p>
                @else
                    @foreach($user->friends() as $user)
                        @include('users.partials._block')
                    @endforeach
                @endif
            </div>
        </div>
    @endsection