@props([
    'id' => null,
    'title' => 'Modal',
])

<div
    class="modal fade"
    @if($id)
        id="{{ $id }}"
    @endif
    tabindex="-1"
    aria-hidden="true"
>

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    {{ $title }}
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                ></button>

            </div>

            <div class="modal-body">

                {{ $slot }}

            </div>

        </div>

    </div>

</div>