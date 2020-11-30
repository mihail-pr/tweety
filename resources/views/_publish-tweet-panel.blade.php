<div class=" rounded-lg px-8 py-6 mb-8 bg-blue-100" style=" border-width:1px ;border-color: #A70D60;">
    <form method="POST" action='/tweets'>
        @csrf

        <textarea
            name="body"
            class="w-full bg-blue-100"
            placeholder="what's new?"
            required
            autofocus

        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center" >
            <img src="{{auth()->user()->avatar}}"
                 class ="rounded-full mr-2"
                 alt="your avatar"
                 width="50"
                 height="50">
            <button
                style="background-color: #A70D60;"
                type="submit"
                class=" rounded-lg  shadow py-2 px-10 text-sm text-white"
            >Tweet</button>
        </footer>
    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>
