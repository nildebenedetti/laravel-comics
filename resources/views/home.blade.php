@extends("layouts.master")

@section("title")
Titolo pagina Home
@endsection

                @php
                    $cards = config('cards');
                @endphp

@section("content")

<main>
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
            <div class="row g-3">
                <!-- cards -->
                    @foreach ($cards as $card)
                    <x-card :thumb="$card['thumb']" :title="$card['title']">
                    </x-card>
                    @endforeach
            </div>
        </div>
    </section>
</main>

@endsection