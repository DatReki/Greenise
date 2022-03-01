<template>
<div class="container pt-5">
    <div class="mb-4">
        <div class="uk-card uk-card-default uk-card-body">
            <h1 class="uk-card-title">Contact</h1>
            <div id="contact-alert">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16" role="img" aria-label="Success:">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                    <div class="ps-2">
                        Message send
                    </div>
                </div>
            </div>
            <form id="contact-form" class="needs-validation mb-4" novalidate @submit.prevent="contact">
                <div class="row">
                    <div class="col-lg-4 mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Your full name" minlength="1" v-model="name" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">
                            <template v-if="errors !== undefined">
                                <template v-if="errors.name !== undefined">
                                    {{ errors.name[0] }}
                                </template>
                            </template>
                            <template v-else>
                                Please write your full name
                            </template>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="emailPrepend">@</span>
                            <input type="email" id="email" class="form-control" aria-describedby="emailPrepend" minlength="5" v-model="email" placeholder="Your email" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">
                                <template v-if="errors !== undefined">
                                    <template v-if="errors.email !== undefined">
                                        {{ errors.email[0] }}
                                    </template>
                                </template>
                                <template v-else>
                                    Please write down your email
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <label for="reason" class="form-label">Reason</label>
                        <div class="form-group">
                            <select id="reason" class="selectpicker form-control" data-live-search="true" v-model="reason" required>
                                <optgroup label="General">
                                    <option>Question</option>
                                    <option>DMCA</option>
                                </optgroup>
                                <optgroup label="Advice">
                                    <option>Electric vehicles</option>
                                    <option>Solar panels</option>
                                    <option>Wind turbines</option>
                                    <option>Personal advice</option>
                                </optgroup>
                            </select>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">
                                <template v-if="errors !== undefined">
                                    <template v-if="errors.reason !== undefined">
                                        {{ errors.reason[0] }}
                                    </template>
                                </template>
                                <template v-else>
                                    Please specify a reason
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 mb-2">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" minlength="25" v-model="message" required></textarea>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">
                        <template v-if="errors !== undefined">
                            <template v-if="errors.message !== undefined">
                                {{ errors.message[0] }}
                            </template>
                        </template>
                        <template v-else>
                            Please write a message with at least 25 characters
                        </template>
                    </div>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <button class="btn btn-main px-5 py-2" type="submit">Send</button>
                    </li>
                    <li class="list-inline-item">
                        <button class="btn btn-main px-5 py-2" type="reset">Clear</button>
                    </li>
                </ul>
            </form>
            <div class="mb-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.069652374799!2d-83.99942150943996!3d34.04208436339365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f595c91f19ad49%3A0xcfcd87d00cd7355b!2s2410%20Tech%20Center%20Pkwy%20NE%2C%20Lawrenceville%2C%20GA%2030043%2C%20Verenigde%20Staten!5e0!3m2!1snl!2snl!4v1646052565833!5m2!1snl!2snl" style="border:0; outline: 0; width: 100%; height: 30em;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'Contact',
    data() {
        return {
            name: '',
            email: '',
            reason: '',
            message: '',
            errors: []
        }
    },

    head() {
        return {
            title: 'Contact',
            link: [{
                rel: 'stylesheet',
                href: 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css'
            }],
            script: [{
                    hid: 'stripe',
                    defer: true
                },
                {
                    src: 'https://code.jquery.com/jquery-3.6.0.slim.min.js',
                    integrity: 'sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=',
                    crossorigin: 'anonymous'
                },
                {
                    src: 'https://cdn.jsdelivr.net/gh/farhadmammadli/bootstrap-select@main/js/bootstrap-select.min.js'
                },
                {
                    src: '/js/contact.js'
                }
            ]
        }
    },
    mounted() {},
    methods: {
        async contact() {
            let errors = [];
            try {
                await this.$axios.$get('sanctum/csrf-cookie');
                await this.$axios.$post('/api/contact', {
                        name: this.name,
                        email: this.email,
                        reason: this.reason,
                        message: this.message
                    })
                    .then(() => {
                        this.removeValidationErrors("contact-form");
                        document.getElementById("contact-alert").style.display = "block";
                    })
                    .catch((error) => {
                        if (error.response.status === 422) {
                            errors = error.response.data.errors;

                            let errorArray = [
                                ['name', errors.name],
                                ['email', errors.email],
                                ['reason', errors.reason],
                                ['message', errors.message]
                            ];

                            for (let i = 0; i < errorArray.length; i++) {
                                this.validationErrors(errorArray[i][0], errorArray[i][1]);
                            }
                        }
                    });
            } catch (error) {
                console.log("something went wrong while contact: " + error);
            }
            this.errors = errors;
        }
    }
}
</script>

<style lang="scss">
@import "@/assets/scss/contact.scss";
</style>
