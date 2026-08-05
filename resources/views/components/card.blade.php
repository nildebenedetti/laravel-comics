@props(['thumb', 'title'])


@props(['thumb', 'title'])

<div class="card h-100 border-0 bg-transparent text-whited-flex flex-column">
    <div class="img-container mb-2">
        <img src="{{ $thumb }}" class="card-img-top img-fluid" alt="{{ $title }}">
    </div>
    <div class="card-body p-0">
        <h6 class="text-uppercase fw-semibold small fs-6">{{ $title }}</h6>
    </div>
</div>