@component('mail::message')
# Merci d'avoir utilisé notre générateur de CV


Votre email est : {{$user['email']}}

Vous pouvez dès maintenant consulter les annonces disponible sur notre plateforme

@component('mail::button', ['url' => 'http://emploi-mahajanga.mg'])
Voir annonces
@endcomponent

Cordialement,<br>
L'équpe Emploi Mahajanga
@endcomponent
