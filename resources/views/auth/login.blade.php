@extends('layouts.user') @section('content')

<div class="login-form padding20 block-shadow">
    <form role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h1 class="text-light">Login to Application</h1>
        <hr class="thin" />
        <br />
        <div class="input-block">
            <div class="input-control text full-size {{ $errors->has('email') ? ' has-error' : '' }}" data-role="input">
                <label for="user_login">User email:</label>
                <input type="text" name="email" id="user_login" value="{{old('email')}}" required>
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            @if ($errors->has('email'))
            <div class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
            @endif
        </div>

        <div class="input-block">
            <div class="input-control password full-size {{ $errors->has('password') ? ' has-error' : '' }}" data-role="input">
                <label for="user_password">User password:</label>
                <input type="password" name="password" id="user_password" required>
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>

            @if ($errors->has('password'))
            <div class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </div>
            @endif
        </div>

        <label class="input-control checkbox small-check">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="check"></span>
                <span class="caption">Remember me</span>
            </label>

        <br />
        <br />


        <div class="form-actions">
            <button type="submit" class="button primary">Login to...</button>
            <a href="{{url('/')}}" type="button" class="button link">Cancel</a>
            <a class="button link" type="button" href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>
        <div>
            <p>Don't have an account?</p>
            <a href="{{ route('register') }}" class="link"><span class="fa fa-sign-in"></span> <u>Register here</u></a>
        </div>
    </form>
</div>



<style>
    .login-form {
        width: 25rem;
        height: 26rem;
        position: fixed;
        top: 50%;
        margin-top: -14rem;
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

        $('.input-block').on('click', function (e) {
            $(this).find('.help-block').fadeOut(200);
        })



    });

</script>





@endsection