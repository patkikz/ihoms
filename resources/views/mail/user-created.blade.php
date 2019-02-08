@component('mail::message')
# Good Day Dear User!

You're now part of a community that cares for the things that really matters to you!

You can now access our website by clicking the button below:


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
