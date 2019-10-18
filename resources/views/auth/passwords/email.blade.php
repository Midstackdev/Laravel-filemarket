@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title">Recover your password</h1>
                 @if (session('status'))
                    <div class="notification is-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{route('password.email')}}" method="post" class="form">
                    @csrf
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
                          <div class="control">
                            <button class="button is-primary">Send password reset link</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
