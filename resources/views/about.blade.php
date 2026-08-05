@extends("layouts.master")

@section("title")
About
@endsection

                @php
                    $cards = config('cards');
                @endphp

@section("content")

<main class="container my-5">
    <div class="p-5 text-white rounded-4 shadow-lg bg-dc-dark">
        
        <!-- Badge -->
        <span class="badge text-uppercase mb-3 px-3 py-2 fw-bold bg-dc-blue tracking-wide">
            * BAM! * TRAINING MODE ACTIVE
        </span>

        <!-- Title -->
        <h1 class="display-4 fw-bold text-uppercase mb-3 tracking-wide">
            WELCOME TO THE <span class="text-dc-blue">CODE LAB!</span>
        </h1>

        <p class="lead fs-4 mx-auto mb-4 text-light opacity-75">
            <strong>POW!</strong> Quick heads-up: this site is a full-throttle practice ground! No villainous code here, just pure daily grinding.
        </p>

        <!-- Cards -->
        <div class="row g-4 justify-content-center my-2 text-start">
            <div class="col-12 col-md-6">
                <div class="p-4 rounded-3 h-100 border-start border-4 bg-dc-card border-dc-blue">
                    <h5 class="fw-bold mb-2 text-uppercase text-dc-blue">⚡ ZAP! PHP UNDERWAY</h5>
                    <p class="mb-0 fs-6 text-light opacity-75">
                        Currently leveling up my PHP powers, turning raw backend logic into sheer computational muscle!
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="p-4 rounded-3 h-100 border-start border-4 bg-dc-card border-dc-blue">
                    <h5 class="fw-bold mb-2 text-uppercase text-dc-blue">💥 KABOOM! BLADE DEBUT</h5>
                    <p class="mb-0 fs-6 text-light opacity-75">
                        This is officially my first-ever deployment using <strong>Blade</strong>. And honestly? It’s slick, ridiculously handy, and absolute magic to work with.
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer note -->
        <div class="mt-4">
            <p class="text-secondary fst-italic mb-0 small">
                * SWOOSH * Stand back, awesome features loading soon...
            </p>
        </div>

    </div>
</main>

@endsection
