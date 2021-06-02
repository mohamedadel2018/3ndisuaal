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
                            <label class="control-label">@lang('app.categories')</label>
                            <select class="form-control" wire:model="selectedState">
                                <option>@lang('app.categories')</option>
                                @forelse ($encyclopediaCats as $encyclopediaCat)
                                <option value="{{ $encyclopediaCat->id }}">{{ $encyclopediaCat->translate('name') }}</option>
                                @empty
                                <option>@lang('app.data_not_found')</option>
                                @endforelse
                            </select>

                            @error('selectedState')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('app.sub_categories')</label>
                            <select class="form-control" wire:model="encyclopedia_sub_cat_id">
                                <option value="-1">@lang('app.choose_sub_categories')</option>
                                {{-- @if (!is_null($encyclopediaSubCats)) --}}
                                @forelse ($encyclopediaSubCats as $encyclopediaSubCat)
                                <option value="{{ $encyclopediaSubCat->id }}">{{ $encyclopediaSubCat->translate('name') }}
                                </option>
                                @empty
                                @endforelse
                                {{-- @endif --}}
                            </select>

                            @error('encyclopedia_sub_cat_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.question_ar')</label>
                            <input type="text" wire:model="question_ar" class="form-control">
                            @error('question_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.question_en')</label>
                            <input type="text" wire:model="question_en" class="form-control">
                            @error('question_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.question_id')</label>
                            <input type="text" wire:model="question_id" class="form-control">
                            @error('question_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.answer_ar')</label>
                            <textarea class="form-control" id="field-7" wire:model="answer_ar"></textarea>
                            @error('answer_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.answer_en')</label>
                            <textarea class="form-control" id="field-7" wire:model="answer_en"></textarea>
                            @error('answer_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.answer_id')</label>
                            <textarea class="form-control" id="field-7" wire:model="answer_id"></textarea>
                            @error('answer_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-sm-12">
                    <hr>
                    <h3 class="text-center text-purple">@lang('app.seo_section')</h3>
                    <hr>
                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.meta_description_ar')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_description_ar"></textarea>
                            @error('meta_description_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.meta_description_en')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_description_en"></textarea>
                            @error('meta_description_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.meta_description_id')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_description_id"></textarea>
                            @error('meta_description_id')
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
