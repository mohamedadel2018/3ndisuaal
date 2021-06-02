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
                                <option value="">@lang('app.categories')</option>
                                @forelse ($programCats as $programCat)
                                <option value="{{ $programCat->id }}">{{ $programCat->translate('name') }}</option>
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
                            <select class="form-control" wire:model="program_sub_cat_id">
                                {{-- @if (!is_null($programSubCats))
                                @forelse ($programSubCats as $programSubCat)
                                <option value="{{ $programSubCat->id }}">{{ $programSubCat->translate('name') }}
                                </option>
                                @empty
                                @endforelse
                                @endif --}}
                                {{-- @if (!is_null($bookSubCats)) --}}
                                <option value="-1">@lang('app.choose_sub_categories')</option>
                                @forelse ($programSubCats as $programSubCat)
                                <option value="{{ $programSubCat->id }}">{{ $programSubCat->translate('name') }}
                                </option>
                                @empty
                                @endforelse
                                {{-- @endif --}}
                            </select>

                            @error('program_sub_cat_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('app.instractors')</label>
                            <select class="form-control" wire:model="instractor_id">
                             <option value="-1">@lang('app.choose_instractor')</option>
                            @forelse ($instractors as $instractor)
                            <option value="{{ $instractor->id }}">{{ $instractor->translate('name') }}</option>
                            @empty
                            <option>@lang('app.data_not_found')</option>
                            @endforelse
                            </select>

                            @error('instractor_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('app.playlists')</label>
                                    <select class="form-control" wire:model="playlist_id">
                                        <option value="-1">@lang('app.playlist')</option>
                                        @forelse ($playlists as $playlist)
                                        <option value="{{ $playlist->id }}">{{ $playlist->translate('name') }}</option>
                                        @empty
                                        <option>@lang('app.data_not_found')</option>
                                        @endforelse
                                    </select>

                                    @error('playlist_id')
                                    <p class="text-danger lead fz-16">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                            </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.title_ar')</label>
                            <input type="text" wire:model="title_ar" class="form-control">
                            @error('title_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.title_en')</label>
                            <input type="text" wire:model="title_en" class="form-control">
                            @error('title_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.title_id')</label>
                            <input type="text" wire:model="title_id" class="form-control">
                            @error('title_id')
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
                            <label for="field-1" class="control-label">@lang('app.sound_ar')</label>
                            <input type="text" wire:model="sound_ar" class="form-control">
                            @error('sound_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.sound_en')</label>
                            <input type="text" wire:model="sound_en" class="form-control">
                            @error('sound_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">@lang('app.sound_id')</label>
                            <input type="text" wire:model="sound_id" class="form-control">
                            @error('sound_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.description_ar')</label>
                            <textarea class="form-control" id="field-7" wire:model="about_ar"></textarea>
                            @error('about_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.description_en')</label>
                            <textarea class="form-control" id="field-7" wire:model="about_en"></textarea>
                            @error('about_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.description_id')</label>
                            <textarea class="form-control" id="field-7" wire:model="about_id"></textarea>
                            @error('about_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
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
var output = document.getElementById('output')
output.src = URL.createObjectURL(event.target.files[0]);
output.onload = function() {
URL.revokeObjectURL(output.src) // free memory
}
};
</script>
@endpush
