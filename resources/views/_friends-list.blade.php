<h3 class="font-bold text-xl mb-4" style="color: #682E46">Following</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
        <li class="{{$loop->last ? '' : 'mb-4'}}">
            <div class="flex items-center text-sm">
                <a href="{{route('profile',$user->username)}}">
                    <img src="{{$user->avatar}}"
                         class ="rounded-full mr-2"
                         alt=""
                         width="40"
                         height="40">
                </a>
                <a href ="{{route('profile',$user->username)}}">
                    {{$user->name}}
                </a>
            </div>
        </li>
    @empty
        <p class="p-4">No Friends yet.</p>
    @endforelse
</ul>
