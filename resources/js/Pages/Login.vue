<template>
    <v-app>
        <div class="full">
            <!--fila imagen-->
            <v-row align="center" justify="center">
                <img class="py-16" width="850px" height="60px" :src="('./images/Login/logoSecretariaBlanco.svg')">
            </v-row>

            <!--fila card-->
            <v-row justify="center">
                <v-card width="35rem" class="p-5" style="border-radius: 25px" elevation="20">
                    <v-card-text>
                        <div class="MyriadProBlackCond text-center text-4xl py-3" color="grey darken-1"> INICIAR SESIÓN </div>
                        <v-divider class="my-4" color="grey"></v-divider>
                        <form @submit.prevent="submit">

                            <div class="MyriadPro-Cond text-2xl mb-2" color="grey darken-1">Email</div>
                            <v-text-field color="light-green darken-1" outlined prepend-inner-icon="mdi-email" v-model="form.email"></v-text-field>

                            <div class="MyriadPro-Cond text-2xl mb-2" color="grey darken-1">Contraseña</div>
                            <v-text-field
                                color="light-green darken-1"
                                :prepend-inner-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                                :type="show1 ? 'text' : 'password'"
                                @click:prepend-inner="show1 = !show1"
                                outlined
                                v-model="form.password"
                            ></v-text-field>

                                <v-btn class="py-6 mt-3" type="submit" block style="background-color: #56ab2f">
                                    <a class="MyriadPro-Cond text-xl" style="color:white"> Ingresar </a>
                                </v-btn>
                        </form>
                    </v-card-text>
                </v-card>
            </v-row>
        </div>
    </v-app>
</template>

<script>
export default {
    data() {
        return {
            show1:false,
            form: this.$inertia.form({
                email: '',
                password: '',
            })
        }
    },
    methods: {
        submit() {
            this.form.post(this.route('login'), {
                onError: () => window.alert("Verifique sus datos ingresados"),
            })
        }
    }
}
</script>

<style>


/* Style de Agustín */
[type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #4caf5000;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    border-color: #9CCC65;
}

.full {
    background-image: linear-gradient(-60deg, #16a085 0%, #f4d03f 100%);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    width: 100%;
    height:100vh;
}


@font-face {
    font-family: MyriadPro-Cond;
    src: url('/fonts/MyriadPro-Cond.otf');
}
@font-face {
    font-family: MyriadProBlackCond;
    src: url('/fonts/MyriadProBlackCond.otf');
}

.MyriadPro-Cond{
    font-family: "MyriadPro-Cond";
}

.MyriadProBlackCond {
    font-family: "MyriadProBlackCond";
}

</style>
