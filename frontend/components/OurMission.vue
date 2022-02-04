<template>
<div v-if="direction == 'left'" class="row">
    <div class="col-12 col-lg-4">
        <picture>
            <source type="image/webp" :srcset="imageSet">
            <img :src="image" :alt="altText">
        </picture>
    </div>
    <div class="col-12 col-lg-8 text">
        <p>{{text}}</p>
    </div>
</div>
<div v-else class="row">
    <div class="col-12 col-lg-8 text">
        <p>{{text}}</p>
    </div>
    <div class="col-12 col-lg-4">
        <picture>
            <source type="image/webp" :srcset="imageSet">
            <img :src="image" :alt="altText">
        </picture>
    </div>
</div>
</template>

<script>
export default {
    props: {
        direction: {
            type: String,
            required: true
        },
        filename: {
            type: String,
            required: true
        },
        altText: {
            type: String,
            required: true
        },
        text: {
            type: String,
            required: true
        }
    },
    computed: {
        imageSet() {
            return require(`~/static/images/index/${this.filename}.webp`)
        },
        image() {
            return require(`~/static/images/index/${this.filename}.jpg`)
        }
    }
}
</script>

<style>

</style>
