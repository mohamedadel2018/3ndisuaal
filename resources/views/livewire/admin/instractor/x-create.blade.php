<div wire:transition="slide-in" id="con-create-modal" wire:ignore.self.self class="modal fade" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content modal-conetnt-create">
            <div class="modal-header custom-modal-title ">
                <h4 class="modal-title text-white">@lang('app.create')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <div class="row">

                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-purple btn-lg waves-effect waves-light"
                        wire:click.prevent="store" wire:loading.attr="disabled">@lang('app.save')</button>
                    <button type="button" class="btn btn-danger waves-effect"
                        data-dismiss="modal">@lang('app.close')</button>

                </div>
                <hr>
                @include('alerts')
            </div>
        </div>
    </div><!-- /.modal -->
</div>
@push('js')
<script>
var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
output.onload = function() {
URL.revokeObjectURL(output.src) // free memory
}
};

</script>
@endpush
