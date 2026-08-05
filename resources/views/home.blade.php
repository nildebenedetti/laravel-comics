@extends("layouts.master")

@section("title")
Home
@endsection

                @php
                    $cards = config('cards');
                @endphp

@section("content")

<main class="mx-auto px-2">

    <!-- hero banner --> 
    <section class="banner">
        <div class="banner">
            <div class="img-container container-fluid">
                <img src="" alt="">
            </div>
        </div>
    </section>
    <!-- card collection -->
    <section class="comics-colelction">
        <div class="card-container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3">
                <!-- cards -->
                    @foreach ($comics as $comic)
                    <x-card :thumb="$comic['thumb']" :title="$comic['title']">
                    </x-card>
                    @endforeach
            </div>
        </div>
    </section>
    <x-banner 
        badge="* BAM! * DC COMICS VAULT"
        title="EXPLORE THE"
        highlight="DC UNIVERSE!"
        subtitle="POW! Dive into the official comic catalog, rendered in real-time with PHP muscle and Blade magic." 
    />
</main>

@endsection