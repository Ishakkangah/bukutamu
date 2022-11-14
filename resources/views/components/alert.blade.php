<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-white" role="alert">
            <strong>OK.</strong> {{ session()->get('success') }}.
        </div>
    @endif
</div>
