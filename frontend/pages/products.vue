<template>
<div class="container pt-5">
    <div class="mb-4">
        <v-wait for="cars">
            <template slot="waiting">
                <LoadingIcon />
            </template>
            <no-ssr>
                <ProductsCars :cars="this.cars" />
            </no-ssr>
        </v-wait>
    </div>
    <div class="mb-4">
        <v-wait for="wind-turbines">
            <template slot="waiting">
                <LoadingIcon />
            </template>
            <no-ssr>
                <ProductsWindTurbines :wind-turbines="this.windTurbines" />
            </no-ssr>
        </v-wait>
    </div>
    <div class="mb-4">
        <v-wait for="solar-panels">
            <template slot="waiting">
                <LoadingIcon />
            </template>
            <no-ssr>
                <ProductsSolarPanels :solar-panels="this.solarPanels" />
            </no-ssr>
        </v-wait>
    </div>
</div>
</template>

<script>
export default {
    name: 'ResourcePage',
    data() {
        return {
            cars: {},
            windTurbines: {},
            solarPanels: {}
        }
    },
    methods: {
        getData() {
            this.getCars();
            this.getWindTurbines();
            this.getSolarPanels();
        },
        getCars() {
            const name = "cars";
            this.$wait.start(name);
            this.GetRequest(name).then((result) => {
                this.cars = result;
                this.$wait.end(name);
            });
        },
        getWindTurbines() {
            const name = "wind-turbines";
            this.$wait.start(name);
            this.GetRequest(name).then((result) => {
                this.windTurbines = result;
                this.$wait.end(name);
            });
        },
        getSolarPanels() {
            const name = "solar-panels";
            this.$wait.start(name);
            this.GetRequest(name).then((result) => {
                this.solarPanels = result;
                this.$wait.end(name);
            });
        },
        async GetRequest(productUrl) {
            try {
                const result = await this.$axios.$get('/api/products/' + productUrl);
                return result;
            } catch (error) {
                console.log("Something went wrong while getting data: " + error);
            }
        },
    },
    beforeMount() {
        this.getData();
    }
}
</script>

<style lang="scss">
@import "@/assets/scss/products.scss";
</style>
