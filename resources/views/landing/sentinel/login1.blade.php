@extends('layouts.user') @section('content')


<div class="login-form padding20 block-shadow">
    {!! Form::open(['url'=>'auth/login']) !!} {{ $msg }}

    <h1 class="text-light">Login to service</h1>
    <hr class="thin" />
    <br />
    <div class="input-control text full-size" data-role="input">
        <label for="user_login">User email:</label>
        <input type="text" name="user_login" id="user_login">
        <button class="button helper-button clear"><span class="mif-cross"></span></button>
    </div>
    <br />
    <br />
    <div class="input-control password full-size" data-role="input">
        <label for="user_password">User password:</label>
        <input type="password" name="user_password" id="user_password">
        <button class="button helper-button reveal"><span class="mif-looks"></span></button>
    </div>
    <br />
    <br />
    <div class="form-actions">
        <button type="submit" class="button primary">Login to...</button>
        <a href="{{url('#')}}" type="button" class="button link">Cancel</a>
    </div>
    <div>
        <p>Don't have an account?</p>
        <a href='{{url(' auth/register ')}}' class="link"><span class="fa fa-sign-in"></span> <u>Register here</u></a>
    </div>
    {!! Form::close() !!}
</div>



<style>
    .login-form {
        width: 25rem;
        height: 21rem;
        position: fixed;
        top: 50%;
        margin-top: -9.375rem;
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