<div id="con-edit-modal" wire:ignore.self class="modal fade modal-edit" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true"  data-animation="fadein"> <!-- style="display: none;" -->
    <div class="modal-dialog modal-dialog-edit" id="modal-dialog-edit">
        <div class="modal-content modal-conetnt-edit" id="modal-conetnt-edit">
            <div class="modal-header custom-modal-title ">
                <h4 class="modal-title text-white">@lang('app.update')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>×</button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-12">

{{-- START --}}
                    <div class="col-md-12">
                    @include('alerts')
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.about_us_ar')</label>
                            <textarea class="form-control" id="field-7" wire:model="about_ar"></textarea>
                            @error('about_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}


{{-- START --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.about_us_en')</label>
                            <textarea class="form-control" id="field-7" wire:model="about_en"></textarea>
                            @error('about_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}


{{-- START --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.about_us_id')</label>
                            <textarea class="form-control" id="field-7" wire:model="about_id"></textarea>
                            @error('about_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}


{{-- START --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.our_vision_ar')</label>
                            <textarea class="form-control" id="field-7" wire:model="our_vision_ar"></textarea>
                            @error('our_vision_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}


{{-- START --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.our_vision_en')</label>
                            <textarea class="form-control" id="field-7" wire:model="our_vision_en"></textarea>
                            @error('our_vision_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}


{{-- START --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.our_vision_id')</label>
                            <textarea class="form-control" id="field-7" wire:model="our_vision_id"></textarea>
                            @error('our_vision_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}


{{-- START --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.our_goals_ar')</label>
                            <textarea class="form-control" id="field-7" wire:model="our_goals_ar"></textarea>
                            @error('our_goals_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}


{{-- START --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.our_goals_en')</label>
                            <textarea class="form-control" id="field-7" wire:model="our_goals_en"></textarea>
                            @error('our_goals_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}


{{-- START --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.our_goals_id')</label>
                            <textarea class="form-control" id="field-7" wire:model="our_goals_id"></textarea>
                            @error('our_goals_id')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
{{-- END --}}
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.title_ar')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_title_ar"></textarea>
                            @error('meta_title_ar')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.title_en')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_title_en"></textarea>
                            @error('meta_title_en')
                            <p class="text-danger lead fz-16">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">@lang('app.title_id')</label>
                            <textarea class="form-control" id="field-7" wire:model="meta_title_id"></textarea>
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
