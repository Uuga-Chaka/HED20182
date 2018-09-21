Vue.component('Partner', {
    props: ['elementos'],
    template: `
    <div id="items">
        <div class="item" v-for="elem in elementos">
            <img :src="elem.img" alt="">
            <Redes :link="elem.redes"></Redes>
        </div>
    </div>`
});

Vue.component('Redes', {
    props: ['link'],
    template: `
    <div class="redes">
        <a :href="link.be" target="_blank"><img src="/assets/img/behance-logo.svg" alt=""></a>
        <a :href="link.face" target="_blank"><img src="/assets/img/logo-facebook.svg" alt=""></a>
        <a :href="link.insta" target="_blank"><img src="/assets/img/logo-instagram.svg" alt=""></a>
    </div>`
});

var app = new Vue({
    el: '#media-partners',
    data: {
        partners: medias
    },
    template: `
    <div id="media-partners">
        <Partner v-bind:elementos="partners"></Partner>
    </div>
    `
});

Vue.component('Images', {
    props: ['patrocinadores'],
    template: `
    <div class="items" >
        <a v-for="patroci in patrocinadores" v-bind:href="patroci.web"><img :src="patroci.img"/></a>
    </div>`
});

console.log(patrocinadores);

var patro = new Vue({
    el: '#patro',
    data: {
        patrocinio: patrocinadores
    },
    template: `
    <div id="patro">
        <h2>gracias a nuestros</h2>
        <h1>patrocinadores</h1>
        <Images v-bind:patrocinadores="patrocinio"></Images>
    </div>`
});