@if(isset($user))
	<p>Hi {{ $user->name }}</p>
@endif

@yield('content')


<p>Thanks, <br>{{ config('app.name') }}</p>