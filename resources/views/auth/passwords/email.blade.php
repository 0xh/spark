@extends('layouts.user') @section('content')


<div class="user-form padding20 block-shadow">

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <form role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <h1 class="text-light">Reset Password</h1>
        <hr class="thin" />
        <br />
        <div class="input-block">
            <div class="input-control text full-size {{ $errors->has('email') ? ' has-error' : '' }}" data-role="input">
                <label for="user_login">User email:</label>
                <input type="text" name="email" id="user_login" value="{{old('email')}}">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            @if ($errors->has('email'))
            <div class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
            @endif
        </div>
        <div class="form-actions">
            <button type="submit" class="button primary">Send Password Reset Link</button>
        </div>


    </form>
</div>

<style>
    .user-form {
        width: 25rem;
        height: 14rem;
        position: fixed;
        top: 50%;
        margin-top: -8rem;
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

        var form = $(".user-form");

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