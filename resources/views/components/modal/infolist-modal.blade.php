<div>
    <!-- Button trigger modal -->
    <button type="button" data-bs-toggle="modal" data-bs-target="#infolist">
        <i class="bi bi-eye text-lg"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="infolist" tabindex="-1" aria-labelledby="infolist-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-bold" id="exampleModalLabel">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $slot}}
                </div>
            </div>
        </div>
    </div>
</div>