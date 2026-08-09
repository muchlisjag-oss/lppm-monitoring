@props([
    'title' => null,
])

<div class="mb-4">

    <h4 class="fw-bold mb-1">
        {{ $title ?? 'Dashboard' }}
    </h4>

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb mb-0">

            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </li>

            @if($title && $title !== 'Dashboard')
                <li class="breadcrumb-item active">
                    {{ $title }}
                </li>
            @endif

        </ol>

    </nav>

</div>