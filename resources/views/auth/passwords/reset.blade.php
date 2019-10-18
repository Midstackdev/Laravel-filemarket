@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title">Choose a new Password</h1>
                <form action="{{ route('password.request') }}" method="post" class="form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="field">
                          <label class="label">Email</label>
                          <div class="control">
                            <input class="input @error('email') is-danger @enderror" type="email" name="email" id="email" placeholder="e.g live@gmail.com" value="{{ old('email') }}">
                          </div>
                          @error('email')
                            <p class="help is-danger">
                                {{$message}}
                            </p>
                          @enderror 
                    </div>

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

                    <div class="field">
                          <div class="control">
                            <button class="button is-primary">Reset password</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
