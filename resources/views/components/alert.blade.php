<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-muted" role="alert">
            <strong class="text-muted">OK.</strong> {{ session()->get('success') }}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>
