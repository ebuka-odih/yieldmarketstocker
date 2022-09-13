@component('mail::message')
# Withdrawal Request

Name: {{ $data['user']->name }}
<br>
Amount: {{ $data['withdraw']->amount }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
