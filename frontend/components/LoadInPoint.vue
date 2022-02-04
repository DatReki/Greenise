<template>
<div class="load-in-point">
    <div class="container px-0">
        <div class="lip-header">
            <picture>
                <source type="image/webp" :srcset="imageSet">
                <img :src="image" :alt="altText">
            </picture>
            <div class="lip-header-text">
                <div>
                    <h2>{{amount}}</h2>
                    <h3>{{object}}</h3>
                </div>
            </div>
        </div>
        <div class="lip-body">
            <p>{{text}}</p>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        filename: {
            type: String,
            required: true
        },
        altText: {
            type: String,
            required: true
        },
        amount: {
            type: String,
            required: true
        },
        object: {
            type: String,
            required: true
        },
        text: {
            type: String,
            required: true
        }
    },
    computed: {
        imageSet () {
            return require(`~/static/images/index/${this.filename}.webp`) 
        }, 
        image () {
            return require(`~/static/images/index/${this.filename}.jpg`)
        }
    }
}
</script>

<style>

</style>
