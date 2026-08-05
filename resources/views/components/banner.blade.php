@props([
    'badge' => null,
    'title' => '',
    'highlight' => '',
    'subtitle' => ''
])

<div class="p-5 text-white rounded-4 shadow-lg bg-dc-dark text-center my-4">
    @if ($badge)
        <span class="badge text-uppercase mb-3 px-3 py-2 fw-bold bg-dc-blue tracking-wide">
            {{ $badge }}
        </span>
    @endif

    <h1 class="display-5 fw-bold text-uppercase mb-3 tracking-wide">
        {{ $title }} <span class="text-dc-blue">{{ $highlight }}</span>
    </h1>

    @if ($subtitle)
        <p class="lead fs-5 mx-auto mb-0 text-light opacity-75" style="max-width: 750px;">
            {{ $subtitle }}
        </p>
    @endif
</div>