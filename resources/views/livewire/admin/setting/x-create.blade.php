<div wire:transition="slide-in" id="con-create-modal" wire:ignore.self class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
                            <label for="field-1" class="control-label">@lang('app.title_ar')</label>
                            <input type="text" wire:model="meta_title_ar" class="form-control">
                            @error('meta_title_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.title_en')</label>
                            <input type="text" wire:model="meta_title_en" class="form-control">
                            @error('meta_title_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.title_id')</label>
                            <input type="text" wire:model="meta_title_id" class="form-control">
                            @error('meta_title_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.description_ar')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_descrption_ar"></textarea>
                            @error('meta_descrption_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.description_en')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_descrption_en"></textarea>
                            @error('meta_descrption_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.description_id')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_descrption_id"></textarea>
                            @error('meta_descrption_id')
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
                            <label class="control-label">@lang('app.home_cover')</label>
                            <select class="form-control" wire:model="home_cover">
                                <option value="">@lang('app.home_cover')</option>
                                <option value="1">@lang('app.video')</option>
                                <option value="2">@lang('app.slider')</option>
                            </select>

                            @error('home_cover')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-purple btn-lg waves-effect waves-light"
                        wire:click.prevent="store">@lang('app.save')</button>
                    <button type="button" class="btn btn-danger waves-effect"
                        data-dismiss="modal">@lang('app.close')</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
</div>
