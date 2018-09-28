function infoActual(titulo, info) {
    return `<h1>{{titulo}}</h1><p>{{info}}</p>`
}

Vue.component('Modal', {
    props: ['datos'],
    methods: {
        ponenteDesseleccionado: function (event) {
            apps.seleccionado = null;
        },
    },
    template: `
    <div id="model"> 
        <div class="container">
                <div id="cruz" v-on:click="ponenteDesseleccionado">
                    <img src="/assets/img/cruz.svg" alt="">
                </div>
            <div class="borde">
                <div class="content">
                    <h1>{{datos.name}}</h1>
                    <img :src="datos.img"/>
                    <p v-for="info in datos.info">{{info}}</p>
                    <Redes :link="datos.redes"></Redes>
                 </div>
            </div>
        </div>
    </div>
    `
});

Vue.component('Partner', {
    props: ['elementos'],

    template: `
    <div id="items">
        <div class="item" v-for="elem in elementos">
            <img :src="elem.img" alt="">
            <Redes :link="elem.redes"></Redes>
            <p>{{elem.name}}</p>
        </div>
    </div>`
});

Vue.component('Redes', {
    props: ['link'],
    template: `
    <div class="redes">
        <a :href="link.be" target="_blank" v-if="link.be"><img src="/assets/img/behance-logo.svg" alt=""></a>
        <a :href="link.face" target="_blank" v-if="link.face"><img src="/assets/img/logo-facebook.svg" alt=""></a>
        <a :href="link.insta" target="_blank" v-if="link.insta"><img src="/assets/img/logo-instagram.svg" alt=""></a>
    </div>`
});



Vue.component('Images', {
    props: ['patrocinadores'],
    template: `
    <div class="items" >
        <a v-for="patroci in patrocinadores" v-bind:href="patroci.web"><img :src="patroci.img"/></a>
    </div>`
});


Vue.component('Ponentes', {
    props: ['ponentes', 'selected'],
    computed: {

    },
    methods: {
        ponenteSeleccionado: function (ponente) {
            apps.seleccionado = ponente;
            console.log(ponente.name);
        },
    },
    template: `
    <div class="ponentes">
        <div class="item" v-for="ponente in ponentes" v-on:click="ponenteSeleccionado(ponente)">
            <div class="photo">
                <img :src="ponente.img"/>
                <div class="mas">
                    <img src="/assets/img/mas.png" alt="">
                    <p>ver más</p>
                </div>
            </div>
            <div class="name">
                <h1>{{ponente.name}}</h1>
            </div>
        </div>
    </div>
    `
}); {
    /* <div class="ponente" v-for="ponente in ponentes">
                <a  v-on:click="ponenteSeleccionado(ponente)"><img :src="ponente.img"/></a>
            </div> */
}


var apps = new Vue({
    el: '#app',
    data: {
        seleccionado: null,
        taller: talleres,
        ponente: ponentes,
        patrocinio: patrocinadores,
        partners: medias
    },
    methods: {
        ponenteDesseleccionado: function () {
            apps.seleccionado = null;
        }
    },
})