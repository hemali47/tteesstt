@component('mail::message')
# Introduction

This is new message from  {{$name}}
<br>
Message:
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
