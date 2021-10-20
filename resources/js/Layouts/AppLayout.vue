<template>
    <div>
        <v-app>
            <v-app-bar app></v-app-bar>
            <v-main>
                <v-container>
                    <main>
                        <slot></slot>
                    </main>
                </v-container>
            </v-main>
        </v-app>
    </div>
</template>

<script>
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
