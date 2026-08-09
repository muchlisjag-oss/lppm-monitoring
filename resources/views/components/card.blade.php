@props([
    'title' => null,
])

<div {{ $attributes->merge(['class' => 'card dashboard-card h-100']) }}>

    @if($title)

        <div class="card-header bg-white border-0 pt-4 px-4">

            <h6 class="fw-bold mb-0">
                {{ $title }}
            </h6>

        </div>

    @endif

    <div class="card-body px-4">

        {{ $slot }}

    </div>

</div>