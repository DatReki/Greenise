<template>
<div id="solar-panels" class="uk-card uk-card-default uk-card-body mb-5">
    <div>
        <h2>Solar Panels</h2>
        <p>
            This is the selection of solar panels we provide
        </p>
    </div>
    <div class="container mt-4">
        <div class="row">
            <template v-for="(value, name) in this.solarPanels">
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
                                        <p class="name">Max power:</p>
                                        <p class="value">{{ value.max_power }}w</p>
                                    </li>
                                    <li>
                                        <p class="name">Efficiency:</p>
                                        <p class="value">
                                            {{ value.efficiency }}%
                                        </p>
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
        solarPanels: {
            required: true
        }
    },
    methods: {
        getImage(filename, extension) {
            const path = "/products/solar-panels";
            return this.requireImage(path, filename, extension);
        }
    }
}
</script>

<style>

</style>
