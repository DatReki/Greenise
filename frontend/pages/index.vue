<template>
<div>
    <div class="container-fluid px-0">
        <div class="text-image-overlay">
            <picture>
                <source type="image/webp" srcset="/images/index/main-1200-portrait.webp" media="(max-width: 375px) and (orientation: portrait)">
                <source type="image/jpeg" srcset="/images/index/main-1200-portrait.jpg" media="(max-width: 375px) and (orientation: portrait)">
                <source type="image/webp" srcset="/images/index/main-145.webp" media="(max-width: 375px) and (orientation: landscape)">
                <source type="image/jpeg" srcset="/images/index/main-145.jpg" media="(max-width: 375px) and (orientation: landscape)">
                <source type="image/webp" srcset="/images/index/main-720.webp" media="(max-width: 1280px)">
                <source type="image/jpeg" srcset="/images/index/main-720.jpg" media="(max-width: 1280px)">
                <source type="image/webp" srcset="/images/index/main-1080.webp" media="(max-width: 1920px)">
                <source type="image/jpeg" srcset="/images/index/main-1080.jpg" media="(max-width: 1920px)">
                <source type="image/webp" srcset="/images/index/main-1440.webp" media="(max-width: 2560px)">
                <source type="image/jpeg" srcset="/images/index/main-1440.jpg" media="(max-width: 2560px)">
                <source type="image/webp" srcset="/images/index/main.webp">
                <img src="/images/index/main.jpg" alt="Main image">
            </picture>
            <div>
                <h1>Greenise</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur bibendum massa et nunc porta, quis egestas orci cursus.
                    Phasellus dictum augue ante, non egestas justo semper rhoncus. Aliquam nec ligula placerat, pharetra eros nec, vestibulum magna.
                    Duis condimentum ligula tempus odio dictum congue.
                    Vestibulum mollis, magna et maximus sollicitudin, tortor turpis mattis erat, sit amet posuere quam ipsum at libero.
                    Maecenas nec erat sed lectus vehicula fringilla sed nec nisl.
                    Phasellus efficitur dignissim imperdiet.
                    In ex libero, porta vitae mi ut, dignissim laoreet ligula.<br><br>

                    Nunc non augue vitae magna commodo mollis eu sit amet augue.
                    Duis nec pretium est. Nam cursus mauris sed metus blandit dignissim in ac erat.
                    Integer pulvinar venenatis consequat. Aenean at dictum dolor.
                    Aenean finibus neque nisi, in pulvinar nulla vestibulum vel.
                    Mauris malesuada, lectus efficitur vulputate efficitur, lorem mi congue neque, a ultricies tortor odio sit amet nulla.
                    Praesent iaculis ullamcorper hendrerit. Suspendisse lacinia nunc eu urna aliquet, vitae sodales erat vehicula.
                    Duis finibus tempus sem consequat placerat.
                </p>
                <a class="btn btn-primary">More information</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="load-in-points">
            <div class="load-in-point">
                <div class="container px-0">
                    <div class="row">
                        <div class="col-auto">
                            <picture>
                                <source type="image/webp" srcset="/images/index/windmill.webp">
                                <img src="/images/index/windmill.jpg" alt="Main image">
                            </picture>
                        </div>
                        <div class="col-lg-9">
                            <h2>120</h2>
                            <h3>Windmills</h3>
                            <p>In 2021 we produced and installed 120 new windmills</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'IndexPage',
}
</script>
