@component('mail::message')
# Email Verification

Kindly click the button below to verify your email

@component('mail::button', ['url' => $details['url'],'color' => 'success'])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent