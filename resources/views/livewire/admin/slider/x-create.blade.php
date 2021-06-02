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
                    <div class="col-md-12">
                        @include('alerts')
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.video_ar')</label>
                            <input type="text" wire:model="video_ar" class="form-control">
                            @error('video_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.video_en')</label>
                            <input type="text" wire:model="video_en" class="form-control">
                            @error('video_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.video_id')</label>
                            <input type="text" wire:model="video_id" class="form-control">
                            @error('video_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-sm-12">
                        <hr>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-7 col-sm-12">
                                <div class="form-group no-margin">
                                    <div class="form-group mb-3">
                                        <label for="example-fileinput">@lang('app.image')</label>
                                        <input type="file" id="example-fileinput" class="form-control-file"
                                            onchange="loadFile(event)" wire:model="image">
                                        @error('image')
                                        <p class="text-danger lead fz-16">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-12 d-flex justify-content-center align-items-center">

                                <img id="output" src="{{ asset('images/default-image.jpg') }}"
                                    class="border border-secondary" width="100" height="100" wire:ignore.self>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('app.viewed')</label>
                            <select class="form-control" wire:model="is_video">
                                <option value="-1">@lang('app.viewed')</option>
                                <option value="0">@lang('app.image')</option>
                                <option value="1">@lang('app.video')</option>
                            </select>

                            @error('is_video')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
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
