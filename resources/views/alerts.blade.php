@if (Session::has('success'))
<div class="alert alert-success text-center justify-content-center d-flex" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" class="mr-auto alert-close-icon">&times;</span>
    <span class="text-center flex-grow-1 flex-shrink-1 align-items-center d-flex justify-content-center">
        <i class="la la-check-square la-2x"></i>
        {{ session('success') }}
    </span>
</div>
@endif
@if (Session::has('info'))
<div class="alert alert-info text-center  d-flex" data-dismiss="alert" aria-label="Close align-items-center">
    <span aria-hidden="true" class="mr-auto alert-close-icon">&times;</span>
    <span class="text-center flex-grow-1 flex-shrink-1 align-items-center d-flex justify-content-center">
        <i class="la la-info la-2x"></i>
        {{ session('info') }}
    </span>
</div>
@endif
