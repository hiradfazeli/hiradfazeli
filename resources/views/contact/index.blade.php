<article id="contactPage" class="popItem hidden relative top-12 mx-auto mt-20 w-4/5 py-4 text-left">
    <header>
        <h2 class="text-2xl font-semibold">Contact Me</h2>
    </header>
    <br>
    <address>
        <section class="mb-10">
            <h3 class="not-italic text-xl font-medium">Phone</h3>
            <a href="tel:+995591100920" class="not-italic leading-10">+995 (591) 100-920</a>
        </section>
        <section class="mb-10">
            <h3 class="not-italic text-xl font-medium">E-mail</h3>
            <a href="mailto: hirad.fazeli94@gmail.com" class="not-italic leading-10">hirad.fazeli94@gmail.com</a>
        </section>
        <section class="mb-10">
            <h3 class="not-italic text-xl font-medium">Address</h3>
            <p class="not-italic leading-10">
                Agmashenebli 4
                <br>
                Gardabani, Kvemo Kartli
                <br>
                1300, Georgia
            </p>
        </section>
        <section class="w-full mb-10">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=41.46902072417814,%2045.082715046070405+(Hirad%20Fazeli)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="https://www.maps.ie/distance-area-calculator.html">area maps</a>
            </iframe>
        </section>
    </address>
    @if (session('message'))
        <div class='alert alert-success'>
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @include('contact.form')
</article>
