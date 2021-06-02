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
                <div class="row">
                    <div class="col-md-12">
                        @include('alerts')
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.name_ar')</label>
                            <input type="text" wire:model="name_ar" class="form-control">
                            @error('name_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.name_en')</label>
                            <input type="text" wire:model="name_en" class="form-control">
                            @error('name_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.name_id')</label>
                            <input type="text" wire:model="name_id" class="form-control">
                            @error('name_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
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
                            <input type="hidden" wire:model="selected_id">
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

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.is_featured')</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" wire:model="is_featured" class="custom-control-input" id="customCheck1">;
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                            @error('is_featured')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-purple btn-lg waves-effect waves-light"
                        wire:click.prevent="update">@lang('app.update')</button>
                    <button type="button" class="btn btn-danger waves-effect close-btn"
                        data-dismiss="modal">@lang('app.close')</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
</div>
