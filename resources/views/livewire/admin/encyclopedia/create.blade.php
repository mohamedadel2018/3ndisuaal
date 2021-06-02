<x-slot name="title">@lang('app.dashboard') | @lang('app.encyclopedia')</x-slot>
<x-slot name="pageTitle">@lang('app.encyclopedia')</x-slot>
<x-slot name="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">@lang('app.dashboard')</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.encyclopedias') }}">@lang('app.encyclopedia')</a></li>
    <li class="breadcrumb-item active">@lang('app.edit')</li>
</x-slot>
<div class="row w-100">
    @include('alerts')
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">@lang('app.categories')</label>
            <select class="form-control" wire:model="selectedState">
                <option value="">@lang('app.categories')</option>
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

    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">@lang('app.sub_categories')</label>
            <select class="form-control" wire:model="encyclopedia_sub_cat_id">
                <option value="-1">@lang('app.choose_sub_categories')</option>
                @forelse ($encyclopediaSubCats as $encyclopediaSC)
                    <option value="{{ $encyclopediaSC->id }}">
                        {{ $encyclopediaSC->translate('name') }}
                    </option>
                @empty
                @endforelse
            </select>

            @error('encyclopedia_sub_cat_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>


    <div class="col-md-6">
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
    <div class="col-md-6">
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

    <div class="col-md-6">
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

    <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.answer_ar')</label>
            <input type="text" wire:model="answer_ar" class="form-control">
            @error('answer_ar')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.answer_en')</label>
            <input type="text" wire:model="answer_en" class="form-control">
            @error('answer_en')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="field-1" class="control-label">@lang('app.answer_id')</label>
            <input type="text" wire:model="answer_id" class="form-control">
            @error('answer_id')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
                <label for="the-file">@lang('app.file')</label>
                <input type="file" id="the-file" class="form-control-file" wire:model="file">
                <h4 class="text-purple" wire:loading wire:target="file">
                    <progress max="100" x-bind:value="progress"></progress>
                </h4>
            @error('file')
                <p class="text-danger lead fz-16">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>


    <h3 class="text-center text-purple w-100">@lang('app.seo_section')</h3>
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
    <div class="col-md-12 d-flex justify-content-center align-items-center">
        <hr>
        <button type="button" class="btn btn-purple btn-lg waves-effect waves-light mt-4"
            wire:click="store">@lang('app.create')</button>
        <hr>
        @include('alerts')
    </div>

</div>
