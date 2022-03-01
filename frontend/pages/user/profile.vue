<template>
<div class="container-fluid px-0">
    <div class="text-image-overlay">
        <picture>
            <source type="image/webp" srcset="/images/index/main-1200-portrait.webp" media="(max-width: 420px) and (orientation: portrait)">
            <source type="image/jpeg" srcset="/images/index/main-1200-portrait.jpg" media="(max-width: 420px) and (orientation: portrait)">
            <source type="image/webp" srcset="/images/index/main-720.webp" media="(max-width: 1280px)">
            <source type="image/jpeg" srcset="/images/index/main-720.jpg" media="(max-width: 1280px)">
            <source type="image/webp" srcset="/images/index/main-1080.webp" media="(max-width: 1920px)">
            <source type="image/jpeg" srcset="/images/index/main-1080.jpg" media="(max-width: 1920px)">
            <source type="image/webp" srcset="/images/index/main-1440.webp" media="(max-width: 2560px)">
            <source type="image/jpeg" srcset="/images/index/main-1440.jpg" media="(max-width: 2560px)">
            <source type="image/webp" srcset="/images/index/main.webp">
            <img src="/images/index/main.jpg" alt="Main image">
        </picture>
        <div class="text-center">
            <h1>Welkom</h1>
            <h3>
                {{ $auth.user.name }} ({{ $auth.user.email }})
            </h3>
        </div>
    </div>
</div>
</template>

<script>
export default {
    middleware: "auth"
}
</script>

<style lang="scss">
.text-image-overlay {
    $height: 65vh;

    position: relative;
    height: $height;

    img {
        height: $height;
    }

    @media (max-width: 1000px) {
        div {
            height: initial !important;
        }
        img {
            height: 100% !important;
        }
    }
}
</style>
