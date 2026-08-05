@props(['thumb', 'title'])


<div class="card col-12 col-sm-6 col-md-3 col-lg-2 ">
    <img src="{{ $thumb }}" alt="{{ $title }} ">
    <h5>{{ $title }}</h5>
</div>