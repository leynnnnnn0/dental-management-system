@props(['message'])
<div>
    <button type="button" data-bs-toggle="modal" data-bs-target="#delete">
        <i class="bi bi-trash text-red-500 text-lg"></i>
    </button>
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $message }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" {{$attributes}}>Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>