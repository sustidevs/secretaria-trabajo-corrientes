<template>
    <v-app>
        <v-sheet>
            <div v-if="$vuetify.breakpoint.smOnly || $vuetify.breakpoint.xsOnly">
                <navbar-mobile/>
            </div>
            <div v-if="$vuetify.breakpoint.mdOnly || $vuetify.breakpoint.lgOnly || $vuetify.breakpoint.xlOnly">
                <navbar-no-registrado/>
            </div>
        </v-sheet>
        <div v-if="$page.url === '/'">
            <Header/>
        </div>
        <v-main class="mt-4 mb-8 mx-4 mx-sm-10 mx-lg-16">
            <slot></slot>
        </v-main>
        <Footer/>
    </v-app>
</template>

<script>
import NavbarMobile from "../Layouts/Componentes/NavbarMobile"
import NavbarNoRegistrado from "../Layouts/Componentes/NavbarNoRegistrado"
import Footer from "../Layouts/Componentes/Footer"
import Header from "../Componentes/Header"

export default {
    components: {NavbarMobile, NavbarNoRegistrado, Footer, Header}
}
</script>

<style>

.v-application {
    background-color: white !important;
}

@font-face {
    font-family: MyriadPro-Cond;
    src: url('/fonts/MyriadPro-Cond.otf');
}

@font-face {
    font-family: MyriadPro-LightCond;
    src: url('/fonts/MyriadPro-LightCond.otf');
}

@font-face {
    font-family: MyriadProBlackCond;
    src: url('/fonts/MyriadProBlackCond.otf');
}

.MyriadPro-Cond{
    font-family: "MyriadPro-Cond";
}

.MyriadPro-LightCond {
    font-family: "MyriadPro-LightCond";
}

.MyriadProBlackCond {
    font-family: "MyriadProBlackCond";
}
</style>

