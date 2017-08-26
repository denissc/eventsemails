@component('mail::message')
Hello, Administration

{{$feedback}}

Thanks,<br> {{$user->name}}
<br>
{{ config('app.name') }}
@endcomponent
