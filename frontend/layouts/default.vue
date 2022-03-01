<template>
<div class="body-main">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
                <span uk-icon="icon: menu; ratio: 2"></span>
            </button>
            <div id="navbar-content" class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <NuxtLink to="/" class="nav-link">Home</NuxtLink>
                    </li>
                    <li class="nav-item">
                        <NuxtLink to="/products" class="nav-link">Products</NuxtLink>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <NuxtLink to="/contact" class="nav-link" href="#">Contact</NuxtLink>
                    </li>
                </ul>
                <div class="d-flex me-5">
                    <div class="me-5">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a id="profile-dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul v-if="$auth.loggedIn" class="dropdown-menu" aria-labelledby="profile-dropdown">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li><a class="dropdown-item" href="#" @click.prevent="logout()">Logout</a></li>
                                </ul>
                                <ul v-else class="dropdown-menu" aria-labelledby="profile-dropdown">
                                    <li><NuxtLink to="/user/login" class="dropdown-item">Login</NuxtLink></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="content-body">
        <Nuxt />
    </div>
    <footer>
        <div class="container">
            <div class="py-2">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-2 mt-4 mt-lg-0 text-center text-md-start">
                        <h5>General</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><NuxtLink to="/" class="nav-link p-0">Home</NuxtLink></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 col-lg-2 mt-4 mt-lg-0 text-center text-md-start">
                        <h5>Resources</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><NuxtLink to="/resources" class="nav-link p-0">Resources page</NuxtLink></li>
                        </ul>
                    </div>

                    <div class="col-12 col-lg-2 mt-4 mt-lg-0 text-center text-md-start">
                        <h5>Account</h5>
                        <ul v-if="$auth.loggedIn" class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Profile</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0" @click.prevent="logout()">Logout</a></li>
                        </ul>
                        <ul v-else class="nav flex-column">
                            <li class="nav-item mb-2"><a href="/user/login?show_form=login" class="nav-link p-0">Login</a></li>
                            <li class="nav-item mb-2"><a href="/user/login?show_form=register" class="nav-link p-0">Register</a></li>
                        </ul>
                    </div>

                    <div class="col-md-12 col-lg-4 offset-lg-1 mt-4 mt-lg-0 text-center text-md-start">
                        <form class="needs-validation d-inline" novalidate>
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of whats new and exciting from us.</p>
                            <div class="container px-0 py-0 w-100">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12 col-lg-6 col-xl-8 px-0 py-0">
                                        <input id="newsletter1" type="email" class="form-control" placeholder="Email address" minlength="4" required>
                                        <div class="valid-feedback d-none newsletter-errors"></div>
                                        <div class="invalid-feedback newsletter-errors">
                                            Please enter your email
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-auto px-0 px-lg-2 mt-2 mt-lg-0">
                                        <button class="btn btn-primary btn-second w-100" type="submit">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-block d-md-flex justify-content-between py-4 my-4 border-top">
                    <p class="mt-3">© 2021 Greenise, Inc. All rights reserved.</p>
                    <ul id="social-media-icons" class="list-unstyled d-flex mt-3">
                        <li class="ms-3">
                            <a>
                                <span uk-icon="icon: discord; ratio: 2"></span>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a>
                                <span uk-icon="icon: twitter; ratio: 2"></span>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a>
                                <span uk-icon="icon: instagram; ratio: 2"></span>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a>
                                <span uk-icon="icon: youtube; ratio: 2"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</template>

<script>
export default {
    name: 'LayoutDefault',
    methods: {
        async logout() {
            await this.$auth.logout();
        }
    }
}
</script>
