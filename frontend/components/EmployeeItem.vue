<template>
<div class="employees">
    <v-wait for="colleagues">
        <template slot="waiting">
            <LoadingIcon />
        </template>
        <div v-for="(user, index) in users" :key="index">
            <!-- 
                3-2-2022
                Bootstrap version: 5.1.3
                UIkit version: 3.10.1
                For some reason both Bootstrap and UIkit think it's a good idea to use display: none !important;
                Have to write my own css to work around it.
            -->
            <div class="employee-overview">
                <img :src="`${user.picture.large}`">
                <h4>{{user.name.first}} {{user.name.last}}</h4>
                <ul class="list-unstyled">
                    <li>
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-3">
                                    <i class="far fa-envelope fa-2x"></i>
                                </div>
                                <div class="col-9">
                                    <a :href="`mailto:${user.email}`">{{user.email}}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fas fa-mobile-alt fa-2x"></i>
                                </div>
                                <div class="col-9">
                                    <a :href="`tel:${user.phone}`">{{user.phone}}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-3">
                                    <i class="far fa-calendar-alt fa-2x"></i>
                                </div>
                                <div class="col-9">
                                    <p>{{user.dob.age}}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fas fa-map-marked-alt fa-2x"></i>
                                </div>
                                <div class="col-9">
                                    <address>
                                        {{user.location.street.name}} {{user.location.street.number}} {{user.location.postcode}},<br>
                                        {{user.location.city}} {{user.location.state}} {{user.location.country}}
                                    </address>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </v-wait>
</div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            users: [],
        }
    },
    methods: {
        async getUsers() {
            //Name to be passed for the waiting functionalitity and also the name of the endpoint we're calling.
            const name = "colleagues";
            this.$wait.start(name);
            this.GetRequest(name).then((result) => {
                //Parse the JSON
                const json = JSON.parse(JSON.stringify(result));
                //Go through each colleague
                json.results.forEach(user => {
                    //Pass colleagues to array
                    this.users.push(user);
                });
                this.$wait.end(name);
            });
        },
        async GetRequest(colleagues) {
            try {
                const result = await this.$axios.$get('/api/' + colleagues);
                return result;
            } catch (error) {
                console.log("Something went wrong while getting data: " + error);
            }
        },
    },
    beforeMount() {
        this.getUsers();
    }
}
</script>

<style>

</style>
