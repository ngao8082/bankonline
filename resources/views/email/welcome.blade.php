@component('mail::message')
# Welcome to Abp online Banking

thank you joining Abp online banking transact fast with Abp online banking

@component('mail::button', ['url' => 'home'])
click here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
