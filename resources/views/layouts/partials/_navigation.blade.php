<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ route('home')}}">
      {{ config('app.name', 'Laravel') }}
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
      	@if(auth()->check())
	      	<a class="navbar-item" href="{{route('login')}}">
		        Your Account
		    </a>
		    <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
		        Sign out
		    </a>
		    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="is-hidden">
	            @csrf
	        </form>
	    @else
	        <div class="buttons">
	          <a class="button is-primary" href="{{route('login')}}">
	            <strong>Sign in</strong>
	          </a>
	          <a class="button is-light" href="{{route('register')}}">
	            Start selling
	          </a>
	        </div>
	    @endif    
      </div>
    </div>
  </div>
</nav>