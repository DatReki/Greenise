<template>
<div id="cars" class="uk-card uk-card-default uk-card-body mb-5">
    <div>
        <h2>Cars</h2>
        <p>
            This is the selection of electric we provide
        </p>
    </div>
    <div class="container mt-4">
        <div class="row">
            <template v-for="(value, name) in this.cars">
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
                                        <p class="name">Battery:</p>
                                        <p class="value">{{ value.battery }}kWh</p>
                                    </li>
                                    <li>
                                        <p class="name">Range:</p>
                                        <p class="value">
                                            {{ value.range }}km - {{ kilometersToMiles(value.range) }}miles
                                        </p>
                                    </li>
                                    <li>
                                        <p class="name">Top speed:</p>
                                        <p class="value">
                                            {{ value.top_speed }}km/h - {{ milesPerHour(value.top_speed) }}mph
                                        </p>
                                    </li>
                                    <li>
                                        <p class="name">Acceleration:</p>
                                        <p class="value">{{ value.acceleration }}s (0-100 km/h)</p>
                                    </li>
                                    <li>
                                        <p class="name">Electric motor:</p>
                                        <p class="value">{{ value.motor }}</p>
                                    </li>
                                    <li>
                                        <p class="name">Power consumption (WLTP):</p>
                                        <p class="value">{{ value.power_consumption }}kWh/100km</p>
                                    </li>
                                    <li>
                                        <p class="name">Production:</p>
                                        <p class="value">{{ getYearAndMonth(value.production_start) }} - {{ value.production_end }}</p>
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
        cars: {
            required: true
        }
    },
    methods: {
        getImage(filename, extension) {
            const path = "/products/cars";
            return this.requireImage(path, filename, extension);
        }
    }
}
</script>

<style>

</style>
