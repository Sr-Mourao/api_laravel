<p>Olá {{ $user->first_name }}</p>
<p>Seja bem vindo ao primeira api feita por Felipe Mourão!</p>
<a href="{{ config('app.site_url')}}/verificar-email?token={{ $user->token}}">Verificar email</a>