<template>
    <div class="MyriadPro-Cond">
        <v-app-bar class="pl-3" height="64" color="#393b44">
                <!--<a href="/"><img class="pa-2" width="full" :src="('./images/secretariaBlanco.svg')"></a> -->
            <v-bottom-navigation class="justify-start" background-color="#393b44" dark fixed height="70">
                <v-bottom-sheet v-model="sheet">
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                        v-bind="attrs"
                        v-on="on"
                        >
                            Ícono
                            <v-icon class="white--text">mdi-menu</v-icon>
                        </v-btn>
                    </template>
                    <v-list color="#393b44" dark class="MyriadPro-Cond">
                        <div v-for="(link, i) in links">

                            <v-list-tile
                                v-if="!link.subLinks"
                                :key="i"
                                :to="link.to"
                                :active-class="color"
                                avatar
                                class="v-list-item"
                            >
                                <v-list-tile-action>
                                    <v-icon>{{ link.icon }}</v-icon>
                                </v-list-tile-action>

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
                                    class="white--text"
                                >
                                    <v-list-tile-content>
                                        <v-list-item-title class="pl-8 ma-3">{{ sublink.text }}</v-list-item-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list-group>
                        </div>
                    </v-list>
                </v-bottom-sheet>
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
        icon   : 'mdi-chevron-right',
        text   : 'Inicio',
    },
    {
        icon     : 'mdi-tennis',
        text     : 'Institucional',
        subLinks : [
            {
                text : 'Inspectores',
                to    : '/',
                icon  : 'mdi-chevron-right'
            },
            {
                text : 'Organigrama',
                to    : '/',
                icon  : 'mdi-chevron-right'
            },
        ]
    },
    {
        to     : '/',
        icon   : 'mdi-chevron-right',
        text   : 'Trámites',
    },
    {
        to     : '/',
        icon   : 'mdi-chevron-right',
        text   : 'Novedades',
    },
]
    }),
}
</script>