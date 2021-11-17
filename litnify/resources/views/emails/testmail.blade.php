@component('mail::message')

# Test-Email


Das hier ist eine Testnachricht.

Test bestanden ! :)


Mit freundlichen Grüßen
<br>
{{ env('MAIL_SALUTION') }}
@endcomponent


