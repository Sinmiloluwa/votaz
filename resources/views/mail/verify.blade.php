@component('mail::message')
# Email Verification

<b>Hello, you're a click away</b><br>

Kindly click the button below to verify your email and start voting

@component('mail::button', ['url' => $details['url'],'color' => 'success'])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent