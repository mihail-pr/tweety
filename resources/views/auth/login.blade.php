<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 border border-gray-300 bg-gray-200 rounded-lg">
            <div class="col-md-8">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="email"
                        >
                            Email
                        </label>
                        <input class="border border-gray-4oo p-2 w-full"
                               type="text"
                               name="email"
                               id="email"
                               autocomplete="email"
                               value="{{old('email')}}"
                               required
                        >

                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                               for="password"
                        >
                            Password
                        </label>
                        <input class="border border-gray-4oo p-2 w-full"
                               type="password"
                               name="password"
                               id="password"
                               autocomplete="current-password"
                               required
                        >

                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <div>
                            <input class="mr-1"
                                   type="checkbox"
                                   name="remember"
                                   id="remember" {{old('remember') ? 'checked' : ''}}
                            >
                            <label class="text-xs text-gray-700 font-bold uppercase"
                                   for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <div >
                        <button type="submit"
                                class="rounded-lg shadow text-sm text-white py-2 px-4 mr-2"
                                style="background-color: #A70D60;">
                            Submit
                        </button>
                        <a href="{{route('password.request')}}" class="text-xs text-gray-700">Forgot Your Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
