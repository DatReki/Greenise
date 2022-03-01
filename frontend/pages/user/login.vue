<template>
<div id="login-page" class="container-fluid">
    <div id="login-container" class="container">
        <ul class="uk-subnav uk-subnav-pill" uk-switcher>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
        </ul>
        <ul class="uk-switcher uk-margin">
            <!-- Login -->
            <li>
                <div>
                    <form id="login-form" class="needs-validation" novalidate @submit.prevent="login">
                        <h3>Email</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input v-model="email" id="login-email" class="uk-input" type="email" minlength="4" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    <template v-if="errors !== undefined">
                                        <template v-if="errors.email !== undefined">
                                            {{ errors.email[0] }}
                                        </template>
                                        <template v-else>
                                            {{ errors }}
                                        </template>
                                    </template>
                                    <template v-else>
                                        Please enter your email.
                                    </template>
                                </div>
                            </div>
                        </div>
                        <h3>Password</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input v-model="password" id="login-password" class="uk-input" type="password" minlength="6" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    Please enter your password.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-main" type="submit">Login</button>
                    </form>
                </div>
            </li>
            <!-- Register -->
            <li>
                <div>
                    <form id="registration-form" class="needs-validation" novalidate @submit.prevent="register">
                        <h3>Name</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input v-model="name" id="name" class="uk-input" type="text" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    <template v-if="errors !== undefined">
                                        <template v-if="errors.name !== undefined">
                                            {{ errors.name[0] }}
                                        </template>
                                    </template>
                                    <template v-else>
                                        Please enter your name.
                                    </template>
                                </div>
                            </div>
                        </div>
                        <h3>Email</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input v-model="email" id="email" class="uk-input" type="email" minlength="4" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    <template v-if="errors !== undefined">
                                        <template v-if="errors.email !== undefined">
                                            {{ errors.email[0] }}
                                        </template>
                                    </template>
                                    <template v-else>
                                        Please enter your email.
                                    </template>
                                </div>
                            </div>
                        </div>
                        <h3>Password</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input v-model="password" id="password" class="uk-input" type="password" minlength="6" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    <template v-if="errors !== undefined">
                                        <template v-if="errors.password !== undefined">
                                            {{ errors.password[0] }}
                                        </template>
                                    </template>
                                    <template v-else>
                                        Please enter your password.<br>
                                        It needs to be 6 characters or longer.
                                    </template>
                                </div>
                            </div>
                        </div>
                        <h3>Confirm password</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input v-model="password_confirmation" id="password_confirmation" class="uk-input" type="password" minlength="6" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    <template v-if="errors !== undefined">
                                        <template v-if="errors.password_confirmation !== undefined">
                                            {{ errors.password_confirmation[0] }}
                                        </template>
                                    </template>
                                    <template v-else>
                                        Please enter your password.<br>
                                        It needs to be 6 characters or longer.
                                    </template>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-main" type="submit">Register</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
</template>

<script>
const loginFile = "/js/login.js";

export default {
    name: 'LoginPage',
    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            errors: []
        }
    },
    head() {
        return {
            title: 'Login',
            script: [{
                hid: 'stripe',
                src: loginFile,
                defer: true
            }]
        }
    },
    mounted() {
        if (!process.server) {
            let script = document.createElement("script");
            script.onload = this.onScriptLoaded;
            script.type = "text/javascript";
            script.src = loginFile;
            document.head.appendChild(script);
        }
    },
    methods: {
        async login() {
            let errors = [];
            try {
                await this.$auth.loginWith('laravelSanctum', {
                    data: {
                        email: this.email,
                        password: this.password,
                    }
                }).then(() => {
                    this.removeValidationErrors("login-form");
                });
            } catch (error) {
                if (error.response.status = 422) {
                    errors = error.response.data.errors;

                    const email = "login-email";
                    const password = "login-password";

                    if (errors == undefined) {
                        errors = error.response.data.result;
                        this.validationErrors(email, errors);
                        this.validationErrors(password, undefined);
                    } else {
                        let errorArray = [
                            [email, errors.email],
                            [password, errors.password]
                        ];

                        for (let i = 0; i < errorArray.length; i++) {
                            this.validationErrors(errorArray[i][0], errorArray[i][1]);
                        }
                    }
                }
            }
            this.errors = errors;
        },
        async register() {
            let errors = [];
            try {
                await this.$axios.$get('sanctum/csrf-cookie');
                await this.$axios.$post('/api/register', {
                        name: this.name,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.password_confirmation
                    })
                    .then(() => {
                        this.removeValidationErrors("registration-form");
                        this.login();
                    })
                    .catch((error) => {
                        if (error.response.status === 422) {
                            errors = error.response.data.errors;

                            let errorArray = [
                                ['name', errors.name],
                                ['email', errors.email],
                                ['password', errors.password],
                                ['password_confirmation', errors.password_confirmation]
                            ];

                            for (let i = 0; i < errorArray.length; i++) {
                                this.validationErrors(errorArray[i][0], errorArray[i][1]);
                            }
                        }
                    });
            } catch (error) {
                console.log("something went wrong while registering: " + error);
            }
            this.errors = errors;
        }
    }
}
</script>

<style lang="scss">
@import "@/assets/scss/login.scss";
</style>
