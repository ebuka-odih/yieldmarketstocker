@component('mail::message')
# Hello {{ $deposit->user->name }}

Your deposit of ${{ $deposit->amount }} has been approved

Please visit your dashboard for more details.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
