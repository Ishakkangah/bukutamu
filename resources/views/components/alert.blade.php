<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-muted" role="alert">
            <strong class="text-muted">OK.</strong> {{ session()->get('success') }}.
        </div>
    @endif
</div>
