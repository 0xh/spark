@extends('layouts.user') @section('content')


<div class="login-form padding20 block-shadow">
    <form role="form" method="POST" action="{{ route('register') }}">
        <h1 class="text-light">Register to Application</h1>
        <hr class="thin" />
        <br />
        <div class="input-control text full-size {{ $errors->has('name') ? ' has-error' : '' }}" data-role="input">
            <label for="user_name">Name:</label>
            <input type="text" name="name" id="user_name" value="{{ old('name') }}" required autofocus>
            <button class="button helper-button clear"><span class="mif-cross"></span></button>
        </div>
        @if ($errors->has('name'))
        <div class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
        @endif

        <br />
        <br />
        <div class="input-control text full-size {{ $errors->has('email') ? ' has-error' : '' }}" data-role="input">
            <label for="user_login">Email Address:</label>
            <input type="text" id="user_login" name="email" value="{{ old('email') }}" required>
            <button class="button helper-button clear"><span class="mif-cross"></span></button>
        </div>
        @if ($errors->has('email'))
        <div class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </div>
        @endif
        <br />
        <br />
        <div class="input-control password full-size {{ $errors->has('password') ? ' has-error' : '' }}" data-role="input">
            <label for="user_password">Password:</label>
            <input type="password" name="password" id="user_password" required>
            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
        </div>
        @if ($errors->has('password'))
        <div class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </div>
        @endif
        <br />
        <br />
        <div class="input-control password full-size" data-role="input">
            <label for="user_password">Retype Password:</label>
            <input type="password" name="password_confirmation" id="user_repassword" required>
            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
        </div>
        <br />
        <div>
            <label class="input-control checkbox small-check">
                    <input type="checkbox">
                    <span class="check"></span>
                    <span class="caption">I agree with <a href="#" class="text-dashed text-italic link" data-role="hint" data-hint="|Read terms and conditions">terms</a></span>
                </label>
        </div>
        <div class="form-actions">
            <button type="submit" class="button primary">Create Account</button>
            <a href="{{url('/')}}" type="button" class="button link">Cancel</a>
        </div>
        <div>
            <p>Have an account?</p>
            <a href='{{route(' login ')}}' class="link"><span class="fa fa-sign-in"></span> <u>Login here</u></a>
        </div>
    </form>
</div>



<style>
    .login-form {
        width: 25rem;
        height: 30rem;
        position: fixed;
        top: 40%;
        margin-top: -12rem;
        left: 50%;
        margin-left: -12.5rem;
        background-color: #ffffff;
        opacity: 0;
        -webkit-transform: scale(.8);
        transform: scale(.8);
    }
</style>

<script language="javascript" type="text/javascript">
    jQuery(document).ready(function ($) {

        var form = $(".login-form");

        form.css({
            opacity: 1,
            "-webkit-transform": "scale(1)",
            "transform": "scale(1)",
            "-webkit-transition": ".5s",
            "transition": ".5s"
        });

    });

</script>



@endsection