<div id="con-edit-modal" wire:ignore.self class="modal fade modal-edit" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" data-animation="fadein">
    <!-- style="display: none;" -->
    <div class="modal-dialog modal-dialog-edit" id="modal-dialog-edit">
        <div class="modal-content modal-conetnt-edit" id="modal-conetnt-edit">
            <div class="modal-header custom-modal-title ">
                <h4 class="modal-title text-white">@lang('app.update')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>×</button>
            </div>
            <div class="modal-body p-4">
                <div class="row"></div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-purple btn-lg waves-effect waves-light"
                        wire:click.prevent="update" wire:loading.attr="disabled">@lang('app.update')</button>
                    <button type="button" class="btn btn-danger waves-effect close-btn"
                        data-dismiss="modal">@lang('app.close')</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
</div>
@push('js')
<script>
    window.addEventListener('load',e => {
    });

    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
    URL.revokeObjectURL(output.src) // free memory
    }
    };
</script>
@endpush
