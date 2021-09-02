@extends('frontend.templates.default')

@section('content')
    <h3>Register</h3>
    <form action="{{ route('register') }}" class="col s12" method="POST">
        @csrf

        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">person</i>
                <input type="text" class="@error('name') invalid @enderror" name="name" value="{{ old('name') }}">
                <label for="">Name</label>
                @error('name')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                @enderror
            </div>

            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" class="@error('email') invalid @enderror" name="email" value="{{ old('email') }}">
                <label for="">Email</label>
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

            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password_confirmation') invalid @enderror" name="password_confirmation">
                <label for="">Password Confirmation</label>
                @error('password_confirmation')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                @enderror
            </div>

            <div class="input-field col right">
                <input type="submit" class="btn waves-effect waves-light red accent-1" value="Register">
            </div>
        </div>
    </form>

@endsection
