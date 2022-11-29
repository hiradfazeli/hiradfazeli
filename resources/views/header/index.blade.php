<header class="w-full border-4 border-primary flex justify-between grow-1 items-center p-6">
    <h1 id="logo" class="font-bold text-3xl"><a href="/" class="">Hirad Fazeli</a></h1>
    @if (Route::has('login'))
        <ul>
            @auth
                <li href="{{ url('/home') }}" id="home" class="inline-block">Home</li>
            @else
                <li id="login" class="hover:cursor-pointer inline-block">Log in</li>

                @if (Route::has('register'))
                    <li id="register" class="inline-block ml-4">Register</li>
                @endif
            @endauth
        </section>
    @endif
</header>
