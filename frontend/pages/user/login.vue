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
                    <form class="needs-validation" novalidate @submit.prevent="login">
                        <h3>Email</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input v-model="email" class="uk-input" type="email" minlength="4" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    Please enter your email.
                                </div>
                            </div>
                        </div>
                        <h3>Password</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input v-model="password" class="uk-input" type="password" minlength="6" required>
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
                    <form class="needs-validation" novalidate @submit.prevent="register">
                        <h3>Name</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input v-model="name" class="uk-input" type="text" minlength="2" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    Please enter your email.
                                </div>
                            </div>
                        </div>
                        <h3>Email</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input v-model="email" class="uk-input" type="email" minlength="4" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    Please enter your email.
                                </div>
                            </div>
                        </div>
                        <h3>Password</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input v-model="password" class="uk-input" type="password" minlength="6" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    Please enter your password.<br>
                                    It needs to be 6 characters or longer.
                                </div>
                            </div>
                        </div>
                        <h3>Confirm password</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input v-model="password_confirmation" class="uk-input" type="password" minlength="6" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    Please enter your password.<br>
                                    It needs to be 6 characters or longer.
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
import axios from 'axios';

export default {
    name: 'LoginPage',
    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_confirmation: ''
        }
    },
    head() {
        return {
            title: 'Login',
            script: [{
                hid: 'stripe',
                src: '/js/login.js',
                defer: true
            }]
        }
    },
    methods: {
        async login() {
            console.log("login - email: " + this.email + " password: " + this.password);
            await this.$auth.loginWith('laravelSanctum', {
                data: {
                    email: this.email,
                    password: this.password,
                }
            })
            /*
                           .then((response) => {
                               // Handle response
                           })
                           .catch((error) => {
                               // Handle any errors
                           }) */
            ;
        },
        async register() {
            try {
                console.log("registering new user");

                await axios.get('http://127.0.0.1:8000/sanctum/csrf-cookie')
                    .then((response) => {
                        console.log("response: " + response);
                    })
                    .catch((error) => {
                        console.log("error: " + error);
                    });

                await axios.post('http://127.0.0.1:8000/api/register', {
                        data: {
                            name: this.name,
                            email: this.email,
                            password: this.password,
                            password_confirmation: this.password_confirmation
                        }
                    })
                    .then((response) => {
                        console.log("Register:\n status: " + response.response.status + "\n  content: " + response.response);
                    }).catch((error) => {
                        console.log("register - error: " + error)

                        // if (err.reponse.status = 422) {
                        // Errors
                        // }
                    });
                // await this.login();
            } catch (error) {

            }
        }
    }
}
</script>

<style lang="scss">
@import "@/assets/scss/login.scss";
</style>
