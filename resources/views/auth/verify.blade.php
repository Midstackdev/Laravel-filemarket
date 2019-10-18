@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="container is-fluid">
            <div class="column is-half is-offset-one-quarter">
                <div class="card">
                    <div class="card-header-title">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-content">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="button is-primary is-outlined is-fullwidth">{{ __('click here to request another') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
