<form action="{{ route('checkout.free', $file) }}" method="post">
	@csrf
	<div class="field has-addons">
	  <div class="control">
		<input class="input" type="email" name="email" id="email" placeholder="you@somewhere.com" value="{{ old('email') }}">
	  </div>
	  <div class="control">
		<button class="button is-primary" type="submit">
		  Download for free
		</button>
	  </div>
	</div>
	@error('email')
		<p class="help is-danger">
		    {{$message}}
		</p>
	@enderror
</form>