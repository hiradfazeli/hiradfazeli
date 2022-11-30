<header class="w-full border-4 border-primary flex justify-between grow-1 items-center p-6">
    <h1 id="logo" class="font-bold text-3xl"><a href="/" class="">Hirad Fazeli</a></h1>
    @if (Route::has('login'))
        <ul>
            @auth
                <a href="{{ url('/home') }}" id="home" class="inline-block">Home</a>
            @else
                <li id="login" class="hover:cursor-pointer inline-block">Sign In</li>
                <li id="register" class="hover:cursor-pointer inline-block ml-4">Sign Up</li>
            @endauth
        </section>
    @endif
</header>
