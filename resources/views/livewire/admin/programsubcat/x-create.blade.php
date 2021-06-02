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
                            <label class="control-label">@lang('app.categories')</label>
                            <select class="form-control" wire:model="program_cat_id">
                                <option >@lang('app.categories')</option>
                                @forelse ($programCats as $programCat)
                                <option value="{{ $programCat->id }}">{{ $programCat->translate('name') }}</option>
                                @empty

                                @endforelse
                            </select>
                            @error('program_cat_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
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
                    {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group no-margin">
                                    <label for="field-7" class="control-label">Personal Info</label>
                                    <textarea class="form-control" id="field-7"
                                        placeholder="Write something about yourself"></textarea>
                                </div>
                            </div>
                        </div> --}}
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
