@component('mail::message')
# Issue Created

An issue was created with the name: {{ $issue->name }}

Priority: {{ $issue->priority }}

@component('mail::button', ['url' => 'http://laravel.test/issues/' . $issue->id])
View In Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
