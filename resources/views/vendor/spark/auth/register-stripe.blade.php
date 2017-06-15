@extends('layouts.main') @push('critical_css') @endpush @push('header_js')
<script src="https://js.stripe.com/v2/"></script>
@endpush @section('content')
<spark-register-stripe inline-template>

    <div class="grid">
        <div class="row">

            <div class="panel widget-box container">
                <div class="heading bg-darkTeal">
                    <div class="title">Team Name
                        <small>- Role</small>
                    </div>
                </div>
                <div class="padding20 block-shadow">
                    <!-- This Partial Has The included  register-common-form -->
                     <!--@include('spark::auth.register-common')-->
                    @include('spark::auth.register-common-form')
                    <!-- Login -->
                    <!-- This is Only Needed If We Want No Card Upfront -->
                    <!--@include('partials.billing')-->

                </div>
            </div>
        </div>
    </div>

</spark-register-stripe>
@endsection @push('footer_js') @endpush