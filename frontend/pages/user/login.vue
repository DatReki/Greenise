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
                    <form class="needs-validation" novalidate>
                        <h3>Email</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input" type="email" minlength="4" required>
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
                                <input class="uk-input" type="password" minlength="6" required>
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
                    <form class="needs-validation" novalidate>
                        <h3>Email</h3>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input" type="email" minlength="4" required>
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
                                <input class="uk-input" type="password" minlength="6" required>
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
                                <input class="uk-input" type="password" minlength="6" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">
                                    Please enter your password.<br> 
                                    It needs to be 6 characters or longer.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-main" type="submit">Login</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
</template>

<script>
export default {
    name: 'LoginPage'
}
</script>

<style lang="scss">
@import "@/assets/scss/login.scss";
</style>
