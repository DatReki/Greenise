<template>
<div class="container pt-5">
    <v-wait for="resources">
        <template slot="waiting">
            <LoadingIcon />
        </template>
        <div v-for="(value, name) in resources" :key="name">
            <div class="uk-card uk-card-default uk-card-body mb-5" v-for="(value2, name2) in value" :key="name2">
                <a class="fs-1" :href="value2.website_url">{{ value2.website_name }}</a>
                <div class="container mt-4">
                    <div class="row">
                        <template v-for="(value3, name3) in value2">
                            <div class="col-12 col-md-6 col-lg-3" v-if="value3.page_used !== undefined" :key="name3">
                                <div class="card uk-height-large mb-4">
                                    <picture>
                                        <source type="image/webp" :srcset="getImage(value3.resource_path, value3.resource_filename, '.webp')">
                                        <img class="card-img-top uk-height-small" :src="getImage(value3.resource_path, value3.resource_filename, '.jpg')" :alt="value3.resource_filename">
                                    </picture>
                                    <div class="card-body">
                                        <h3 class="card-title" v-if="value3.resource_name.length > 0"><a :href="value3.resource_url">{{value3.resource_name}}</a></h3>
                                        <h3 class="card-title" v-else><a :href="value3.resource_url">Image</a></h3>
                                        <p class="card-text">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="d-inline">
                                                        Author: <a :href="value3.author_url">{{value3.author_name}}</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="d-inline">
                                                        Page used: <a :href="value3.section_used">{{value3.page_used}}</a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </p>
                                        <a :href="value3.resource_url" class="btn btn-main">Visit resource page</a>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </v-wait>
</div>
</template>

<script>
export default {
    name: 'ResourcePage',
    data() {
        return {
            resources: {}
        }
    },
    methods: {
        async getData() {
            const name = "resources";
            this.$wait.start(name);
            try {
                await this.$axios.$get('/api/resources')
                    .then((response) => {
                        this.resources = response;
                    })
                    .catch((error) => {
                        console.log("error: " + error);
                    });
            } catch (error) {
                console.log("something went wrong while getting data: " + error);
            }
            this.$wait.end(name);
        },
        getImage(path, filename, extension) {
            return this.requireImage(path, filename, extension);
        }
    },
    beforeMount() {
        this.getData();
    }
}
</script>

<style lang="scss">
@import "@/assets/scss/resources.scss";
</style>
