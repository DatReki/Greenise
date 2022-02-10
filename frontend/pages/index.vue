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
                <a class="btn btn-main">More information</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="load-in-points">
            <LoadInPoint filename="windmill" alt-text="Windmill image" amount="120" object="Windmills" text="In 2021 we produced and installed 120 new windmills. Nunc ut metus ultrices, aliquam ex sed, tincidunt lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean quis varius erat, sit amet congue mauris. Pellentesque vulputate dignissim eros, eget interdum orci venenatis volutpat." />
            <LoadInPoint filename="cars" alt-text="Car image" amount="1200" object="Electric cars" text="In 2021 we produced and installed 1200 new electric vehicles. Nunc ut metus ultrices, aliquam ex sed, tincidunt lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean quis varius erat, sit amet congue mauris. Pellentesque vulputate dignissim eros, eget interdum orci venenatis volutpat." />
            <LoadInPoint filename="solarpanels" alt-text="Solarpanels image" amount="3600" object="Solar panels" text="In 2021 we installed 1200 new solar panels. Nunc ut metus ultrices, aliquam ex sed, tincidunt lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean quis varius erat, sit amet congue mauris. Pellentesque vulputate dignissim eros, eget interdum orci venenatis volutpat." />
        </div>
    </div>
    <div class="our-mission">
        <div class="curved-bg">
            <div class="curve-top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
                    <path fill-opacity="1" d="M0,256L60,240C120,224,240,192,360,176C480,160,600,160,720,176C840,192,960,224,1080,224C1200,224,1320,192,1380,176L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
                </svg>
            </div>
            <div class="content">
                <h1>Our Mission</h1>

                <div class="container">
                    <OurMission direction="left" filename="roof" alt-text="Roof image" text="Our mission/vision here at Greenise is to help the world move into a green focused future. We develop electric vehicles, windmills, solar panels and help people reduce their carbon footprint with personal advisors. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum, lorem et ullamcorper egestas, nibh lectus fringilla turpis, ut aliquet nulla velit ut ex. Mauris consequat erat sit amet dolor." />
                    <OurMission direction="right" filename="our-mission-windmills" alt-text="Windmills" text="Did you know that fossil fuels caused 8.7m deaths globally in 2018? Our goal is to try and get rid of these fossil fuels. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum, lorem et ullamcorper egestas, nibh lectus fringilla turpis, ut aliquet nulla velit ut ex. Mauris consequat erat sit amet dolor." />
                    <OurMission direction="left" filename="plastic-ocean" alt-text="Plastic in the ocean" text="Every year we also donate part of our profit to charities that help clean up our planet. Some great examples of this are teamseas and teamtrees. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum, lorem et ullamcorper egestas, nibh lectus fringilla turpis, ut aliquet nulla velit ut ex. Mauris consequat erat sit amet dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus gravida lacus ut purus tempus finibus. Aliquam a pulvinar massa, non tempor lectus. Etiam vel sapien ipsum. Curabitur luctus enim nec libero imperdiet gravida. Proin sit amet tortor ac tortor consectetur bibendum. Cras tincidunt ante non nisl posuere sollicitudin. Duis sodales nec purus et elementum. Duis mollis semper tortor. Praesent sem." />
                </div>
            </div>
            <div class="curve-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
                    <path fill-opacity="1" d="M0,256L60,240C120,224,240,192,360,176C480,160,600,160,720,176C840,192,960,224,1080,224C1200,224,1320,192,1380,176L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="our-team">
        <div class="employees">
            <div class="slider">
                <div class="container">
                    <div class="row">
                        <div class="col-2 col-md-1 button-backwards d-flex justify-content-center">
                            <button class="btn btn-main" onclick="previousEmployee()">
                                <span uk-icon="icon: chevron-left; ratio: 2"></span>
                            </button>
                        </div>
                        <div class="col-8 col-md-10 d-flex justify-content-center content">
                            <EmployeeItem />
                        </div>
                        <div class="col-2 col-md-1 button-forwards d-flex justify-content-center">
                            <button class="btn btn-main" onclick="nextEmployee()">
                                <span uk-icon="icon: chevron-right; ratio: 2"></span>           
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import loadInPoint from '../components/LoadInPoint.vue';

export default {
    name: 'IndexPage',
    components: {
        loadInPoint
    },
    head() {
        return {
            title: 'Home page',
            script: [{
                hid: 'stripe',
                src: '/js/index.js',
                defer: true
            }]
        }
    }
}
</script>

<style lang="scss">
@import "@/assets/scss/index.scss";
</style>
