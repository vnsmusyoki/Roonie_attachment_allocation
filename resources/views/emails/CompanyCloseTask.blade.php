@component('mail::message')
    # Welcome and
    Hi {{ $receiver }}
    #Send To:  {{ $topic }}
    {{ $message }}
    Thanks
    {{ config('app.name') }}
@endcomponent
