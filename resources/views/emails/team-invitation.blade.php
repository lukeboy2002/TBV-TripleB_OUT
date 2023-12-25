@component('mail::message')
{{ __('You have been invited to join the :team team!', ['team' => $invitation->team->name]) }}

@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::registration()))
{{ __('If you do not have an account, you may create one by clicking the buttons below. After creating an account, you may click the invitation acceptance buttons in this email to accept the team invitation:') }}

@component('mail::buttons', ['url' => route('register')])
{{ __('Create Account') }}
@endcomponent

{{ __('If you already have an account, you may accept this invitation by clicking the buttons below:') }}

@else
{{ __('You may accept this invitation by clicking the buttons below:') }}
@endif


@component('mail::buttons', ['url' => $acceptUrl])
{{ __('Accept Invitation') }}
@endcomponent

{{ __('If you did not expect to receive an invitation to this team, you may discard this email.') }}
@endcomponent
