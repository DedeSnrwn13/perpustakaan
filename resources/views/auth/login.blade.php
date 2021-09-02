@extends('frontend.templates.default')

@section('content')
    <h3>Login</h3>
    <form action="{{ route('login') }}" class="col s12" method="POST">
        @csrf

        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" class="@error('email') invalid @enderror" name="email" value="{{ old('email') }}">
                <label for="">Email Address</label>
                @error('email')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                @enderror
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password') invalid @enderror" name="password">
                <label for="">Password</label>
                @error('password')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                @enderror
            </div>

            <div class="input-field col right">
                <input type="submit" class="btn waves-effect waves-light red accent-1" value="Login">
            </div>
        </div>
    </form>

@endsection
