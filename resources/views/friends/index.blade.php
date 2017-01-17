@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h3>Your friends</h3>

            @if (!$friends->count())
                <p>You have no friends.</p>
            @else
                @foreach ($friends as $user)
                    @include('users.partials._block')
                @endforeach
            @endif
        </div>
        <div class="col-lg-6">
            <h4>Friend requests</h4>

            @if (!$requests->count())
                <p>You have no friend requests.</p>
            @else
                @foreach ($requests as $user)
                    @include('users.partials._block')
                @endforeach
            @endif
        </div>
    </div>
@endsection