<template>
<div id="wind-turbines" class="uk-card uk-card-default uk-card-body mb-5">
    <div>
        <h2>Wind Turbines</h2>
        <p>
            This is the selection of wind turbines we provide
        </p>
    </div>
    <div class="container mt-4">
        <div class="row">
            <template v-for="(value, name) in this.windTurbines">
                <div class="col-12 col-md-6 col-lg-4" :key="name">
                    <div class="card mb-4">
                        <picture>
                            <source type="image/webp" :srcset="getImage(value.image, '.webp')">
                            <img class="card-img-top uk-height-small" :src="getImage(value.image, '.jpg')" :alt="value.image">
                        </picture>
                        <div class="card-body">
                            <h3 class="card-title">{{ value.brand }} - {{ value.model }}</h3>
                            <p class="card-text">
                                <ul class="list-unstyled">
                                    <li>
                                        <p class="name">Power:</p>
                                        <p class="value">{{ value.power }}kWh</p>
                                    </li>
                                    <li>
                                        <p class="name">Height:</p>
                                        <p class="value">
                                            {{ value.height }}m - {{ metersToFeet(value.height) }} feet
                                        </p>
                                    </li>
                                    <li>
                                        <p class="name">Rotor diameter:</p>
                                        <p class="value">
                                            {{ value.rotor_diameter }}m - {{ metersToFeet(value.rotor_diameter) }} feet
                                        </p>
                                    </li>
                                    <li>
                                        <p class="name">Year:</p>
                                        <p class="value">{{ value.year }}</p>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        windTurbines: {
            required: true
        }
    },
    methods: {
        getImage(filename, extension) {
            const path = "/products/wind-turbines";
            return this.requireImage(path, filename, extension);
        }
    }
}
</script>

<style>

</style>
