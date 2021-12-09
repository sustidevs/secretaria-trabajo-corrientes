<template>
    <div class="texto">
        <v-app-bar class="pl-3" color="#393b44">
            <v-bottom-navigation background-color="#393b44" dark fixed>
                <v-bottom-sheet v-model="sheet">
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                        v-bind="attrs"
                        v-on="on"
                        >
                            <v-icon class="white--text">mdi-menu</v-icon>
                        </v-btn>
                    </template>

                    <v-list color="#393b44" dark class="texto">
                        <div v-for="(link, i) in links">
                            <v-list-tile
                                v-if="!link.subLinks"
                                :key="i"
                                :to="link.to"
                                :active-class="color"
                                class="v-list-item"
                            >

                                <a :href="link.to">
                                    <v-list-tile-title v-text="link.text" class="text-white"/>
                                </a>
                            </v-list-tile>

                            <v-list-group
                                v-else
                                :key="link.text"
                                no-action
                            >
                                <template v-slot:activator>
                                    <v-list-tile>
                                        <v-list-tile-content>
                                            <v-list-tile-title>{{ link.text }}</v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </template>

                                <v-list-tile
                                    v-for="sublink in link.subLinks"
                                    :to="sublink.to"
                                    :key="sublink.text"
                                    class="white--text texto"
                                >
                                    <v-list-tile-content>
                                        <a :href="sublink.to">
                                            <v-list-item-title class="pl-6 ma-3 text-white">{{ sublink.text }}</v-list-item-title>
                                        </a>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list-group>
                        </div>
                    </v-list>
                </v-bottom-sheet>
                <v-row no-gutters justify="center">
                    <img  width="80" :src="('./images/secretariaBlanco.svg')">
                </v-row>
            </v-bottom-navigation>
        </v-app-bar>
    </div>
</template>

<script>
export default {
    name: 'NavbarMobile',

    data: () => ({
        sheet: false,
        links: [
            {
                to     : '/',
                text   : 'Inicio',
            },
            {
                text     : 'Institucional',
                subLinks : [
                    {
                        text : 'Delegaciones',
                        to    : '/delegaciones',
                    },
                    {
                        text : 'Organigrama',
                        to    : '/organigrama',
                    },
                ]
            },
            {
                to     : '/tramites',
                text   : 'Trámites',
            },
            {
                to    : '/inspectores',
                text : 'Inspectores'
            },
            {
                to     : '/app-trabajo',
                text   : 'App Trabajo',
            },
            {
                to     : '/tasas',
                text   : 'Pago Tasas',
            },
        ]
    }),
}
</script>

<style>
.texto{
    font-family: "MyriadPro-Cond";
    font-size: 18px;
}
</style>
