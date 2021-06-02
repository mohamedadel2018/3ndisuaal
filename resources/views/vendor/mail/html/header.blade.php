<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<div class="logo-wrapper">
    <img src="{{ asset('images/logo-2-ar.png') }}" width="100">
    <img src="{{ asset('images/logo.png') }}" width="100">
</div>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
