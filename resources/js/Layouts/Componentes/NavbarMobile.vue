<template>
    <div class="texto">
        <v-app-bar class="pl-3" height="64" color="#393b44">
            <v-bottom-navigation class="justify-start" background-color="#393b44" dark fixed height="60">
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
                                <v-list-tile-title v-text="link.text" />
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
                                        <v-list-item-title class="pl-6 ma-3 texto">{{ sublink.text }}</v-list-item-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list-group>
                        </div>
                    </v-list>
                </v-bottom-sheet>
                <v-row justify="start">
                    <img class="py-2" width="80" :src="('./images/secretariaBlanco.svg')">
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
                        to    : '/',
                    },
                    {
                        text : 'Inspectores',
                        to    : '/',
                    },
                    {
                        text : 'Organigrama',
                        to    : '/',
                    },
                ]
            },
            {
                to     : '/',
                text   : 'Trámites',
            },
            {
                to     : '/',
                text   : 'Novedades',
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