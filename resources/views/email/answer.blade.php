@component('mail::message')
# @lang('app.introduction')
<p>@lang('app.your_question_answer')</p>
@component('mail::panel')
{{ $questionAnswer->question }}
@endcomponent
<p>{{ $questionAnswer->answer }}</p>
<div class="logo-wrapper">
    @component('mail::button', ['url' => url('/')])
    @lang('app.anddy_soaal')
    @endcomponent
    @component('mail::button', ['url' => env('MISHKAT_NOUR_URL'),'color' => 'purple',])
    @lang('app.mishkat_nour')
    @endcomponent
</div>

@lang('app.thanks')<br>
{{ __('app.anddy_soaal') }}
@endcomponent
