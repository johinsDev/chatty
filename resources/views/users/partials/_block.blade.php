<div class="media">
    <a href="{{ route('users.show' , [ $user->username ]) }}" class="pull-left">
        <img src="{{ $user->AvatarUrl }}" alt="{{ $user->NameOrUsername }}" class="media-object">
        <div class="media-body">
            <h4 class="media-heading"><a href="{{ route('users.show' , [ $user->username ]) }}">{{ $user->NameOrUsername }}</a></h4>
            @if($user->location)
                <p>{{ $user->location }}</p>
            @endif
        </div>
    </a>
    <hr>
</div>