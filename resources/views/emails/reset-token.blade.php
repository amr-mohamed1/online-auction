@component('mail::message')
# {{__('auth.Reset Password')}}

{{__('general.reset_token')}} <b>{{$user->reset_token}}</b>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
