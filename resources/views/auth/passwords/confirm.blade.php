@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title">Please confirm your password before continuing.</h1>
                <form action="{{ route('password.confirm') }}" method="post" class="form">
                    @csrf

                    <div class="field">
                          <label class="label">Password</label>
                          <div class="control">
                            <input class="input @error('password') is-danger @enderror" type="password" name="password" id="password" value="{{ old('password') }}">
                          </div>
                          @error('password')
                            <p class="help is-danger">
                                {{$message}}
                            </p>
                          @enderror 
                    </div>

                    <div class="field is-grouped">
                          <div class="control">
                            <button class="button is-primary">Sign in</button>
                          </div>

                          <div class="control">
                            <a href="{{ route('password.request') }}">Forgotten your password?</a>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
