<!-- login form -->
<form role="form">
    <h3 class="text-light">Register An Account</h3>
    <hr class="thin" />
    <br /> @if (Spark::usesTeams() && Spark::onlyTeamPlans())
    <div class="input-control text full-size" :class="{'error': registerForm.errors.has('team')}" v-if=" ! invitation" data-role="input">
        <label for="team">{{ ucfirst(Spark::teamString()) }} Name</label>
        <input type="text" name="team" id="team" v-model="registerForm.team" autofocus>
        <button class="button helper-button clear"><span class="mif-cross"></span></button>
        <span class="fg-red" v-show="registerForm.errors.has('team')">
                            @{{ registerForm.errors.get('team') }}
                            </span>
    </div>

    @if (Spark::teamsIdentifiedByPath())
    <br />
    <br />
    <br />
    <div class="input-control text full-size" :class="{'error': registerForm.errors.has('team_slug')}" data-role="input" v-if=" ! invitation">

        <label for="team_slug">{{ ucfirst(Spark::teamString()) }} Slug</label>
        <input type="text" name="team_slug" id="team_slug" v-model="registerForm.team_slug" autofocus>
        <button class="button helper-button clear"><span class="mif-cross"></span></button>
        <span class="fg-red" v-show="registerForm.errors.has('team_slug')">
                            @{{ registerForm.errors.get('team_slug') }}
                            </span>
    </div>
    <p class="fg-blue" v-show=" ! registerForm.errors.has('team_slug')">
        Note: This slug is used to identify your team in URLs.
    </p>

    @endif @endif
    <br />
    <br />
    <br />

    <div class="input-control text full-size" :class="{'error': registerForm.errors.has('name')}" data-role="input">
        <label for="full_name">Full Name</label>
        <input type="text" name="name" id="full_name" v-model="registerForm.name" autofocus>
        <button class="button helper-button clear"><span class="mif-cross"></span></button>
        <span class="fg-red" v-show="registerForm.errors.has('name')">
                            @{{ registerForm.errors.get('name') }}
                            </span>
    </div>
    <br />
    <br />
    <br />
    <div class="input-control text full-size" :class="{'error': registerForm.errors.has('email')}" data-role="input">
        <label for="email">Email Address:</label>
        <input type="text" name="email" id="email" v-model="registerForm.email">
        <button class="button helper-button clear"><span class="mif-cross"></span></button>
        <span class="fg-red" v-show="registerForm.errors.has('email')">
                            @{{ registerForm.errors.get('email') }}
                            </span>
    </div>
    <br />
    <br />
    <br />
    <div class="input-control password full-size" :class="{'error': registerForm.errors.has('password')}" data-role="input">
        <label for="password">Password:</label>
        <input type="password" name="password" id="user_password" v-model="registerForm.password">
        <button class="button helper-button reveal"><span class="mif-looks"></span></button>
        <span class="fg-red" v-show="registerForm.errors.has('password')">
                            @{{ registerForm.errors.get('password') }}
                            </span>
    </div>
    <br />
    <br />
    <br />
    <div class="input-control password full-size" :class="{'error': registerForm.errors.has('password_confirmation')}" data-role="input">
        <label for="password_confirmation">Retype Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" v-model="registerForm.password_confirmation">
        <button class="button helper-button reveal"><span class="mif-looks"></span></button>
        <span class="fg-red" v-show="registerForm.errors.has('password_confirmation')">
                            @{{ registerForm.errors.get('password_confirmation') }}
                            </span>
    </div>
    <br />
    <br />
    <br />
    <div v-if=" ! selectedPlan || selectedPlan.price == 0">
        <div :class="{'error': registerForm.errors.has('terms')}">
            <label class="input-control checkbox">
                            <input type="checkbox" name="terms" v-model="registerForm.terms">
                            <span class="check"></span>
                            <span class="caption">I agree with <a href="/terms" target="_blank" class="text-dashed text-italic link" data-role="hint" data-hint="|Read terms and conditions">terms</a></span>
				            </label>

        </div>
        <p class="fg-red" v-show="registerForm.errors.has('terms')">
            @{{ registerForm.errors.get('terms') }}
        </p>
    </div>
    <br />
    <br />

    <div class="form-actions">
        <button class="button bg-darkTeal fg-white" @click.prevent="register" :disabled="registerForm.busy">
                                <span v-if="registerForm.busy">
                                <i class="fa fa-btn fa-spinner fa-spin"></i>Registering
                                </span>

                                <span v-else>
                                <i class="fa fa-btn fa-check-circle"></i>Register
                                </span>

                            </button>

    </div>
    <div>
        <p>Have an account?</p>
        <a href='{{route('login')}}' class="link"><span class="fa fa-sign-in"></span> <u>Login here</u></a>
    </div>
</form>
<!-- End Login Form -->