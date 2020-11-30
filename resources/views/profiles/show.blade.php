<x-app>

    <header class="mb-6 relative">
        <div class="relative">
            <img
                class="img-fluid rounded-3xl mb-2"
                src="/images/default-profile-banner.jpg"
                alt=""
            >
            <img src="{{$user->avatar}}"
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                 style="left:50%"
                 alt=""
                 width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit',$user)
                    <a href="{{$user->path('edit')}}"
                       class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                        Edit Profile
                    </a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>

            </div>
        </div>
        <div>
            <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet orci ac tellus mollis
                molestie. Praesent venenatis rhoncus nisi, vulputate accumsan turpis vehicula a. Etiam sed posuere ex.
                Duis pharetra tincidunt quam, sed mollis enim euismod a.
            </p>


        </div>
    </header>

    @include('_timeline',[
        'tweets'=>$tweets
    ])
</x-app>
