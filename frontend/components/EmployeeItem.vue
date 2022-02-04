<template>
<div class="employees">
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
    async fetch() {
        await this.getUsers();
    },
    methods: {
        async getUsers() {
            const data = axios.get('http://127.0.0.1:8000/api/colleagues');
            const result = await data;
            result.data.results.forEach(user => {
                this.users.push(user);
            });
        }
    }
}
</script>

<style>

</style>
