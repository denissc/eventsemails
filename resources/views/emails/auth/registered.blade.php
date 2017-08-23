@component('mail::message')
Welcome, {{$user->name}}!

Your registration is succesfull!

Thanks,<br>
{{ config('app.name') }}
@endcomponent
