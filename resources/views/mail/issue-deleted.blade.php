@component('mail::message')
# Issue Deleted

An issue was deleted with the name: {{ $issue->name }}

Priority: {{ $issue->priority }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
