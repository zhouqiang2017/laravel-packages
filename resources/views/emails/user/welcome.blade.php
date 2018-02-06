@component('mail::message')
# Introduction

The body of {{ $user->name }} message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
