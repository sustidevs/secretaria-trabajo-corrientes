<template>
    <layout-registrado>
        <v-col cols="12" sm="12" lg="12">
            <div class="m-2 items-center">
                    <titulo-tramite texto="Cambiar contraseña"/>
                    <div class="justify-center text-2xl pb-7">{{ this.form.correo }}</div>
            </div>
        </v-col>

        <v-row justify="center" class="mx-auto pt-2">
            <v-col cols="12" sm="12" lg="4">
                <v-card  elevation="6" outlined class="pa-4  lighten-4 rounded-xl mx-auto ">
                    <div class="MyriadPro-Cond grey--text text--darken-4 text-2xl mt-2 px-7">
                        <form class="p-7">
                            <v-row>
                                <v-col cols="12" sm="12" lg="12">
                                    <label-input texto="Contraseña actual"/>
                                    <text-field tipo="password" v-model="form.current_pass" icon="mdi-account"/>
                                    <input-error :message="$props.errors['current_password']"></input-error>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col cols="12" sm="12" lg="12">
                                    <label-input texto="Nueva contraseña"/>
                                    <text-field tipo="password" v-model="form.password" icon="mdi-account"/>
                                    <input-error :message="$props.errors['password_too_short']"></input-error>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col cols="12" sm="12" lg="12">
                                    <label-input texto="Confirmar contraseña"/>
                                    <text-field tipo="password" v-model="form.password2" icon="mdi-account"/>
                                    <input-error :message="$props.errors['not_match']"></input-error>
                                </v-col>
                            </v-row>
                            <v-row >
                                <v-col cols="12" sm="12" lg="12">
                                    <v-btn @click="submit()" color="light-green darken-1" elevation="0" dark block height="55">
                                        <div class="MyriadPro-Cond text-xl">Confirmar</div>
                                    </v-btn>
                                </v-col>
                            </v-row>
                        </form>
                    </div>
                </v-card>
            </v-col>
        </v-row>
        <modal-reset-pass :dialog="dialog" @cerrar="show = false"/>
    </layout-registrado>
</template>

<script>
import NavbarRegistrado from "../Layouts/Componentes/NavbarRegistrado";
import LayoutRegistrado from "../Layouts/LayoutRegistrado";
import TituloTramite from '../Componentes/TituloTramite';
import Descripcion from '../Componentes/Descripcion';
import TablaTurnos from "../Componentes/TablaTurnos";
import TablaTurnosAsesoramiento from "../Componentes/TablaTurnosAsesoramiento";
import TextField from '../Componentes/TextField';
import LabelInput from '../Componentes/LabelInput.vue';
import InputError from '../Componentes/InputError.vue';
import ModalResetPass from "../Componentes/Modals/ModalResetPass";
import { Inertia } from '@inertiajs/inertia'


export default {
    name: "ResetPassword",
    components: {TextField, LabelInput, InputError, ModalResetPass, NavbarRegistrado,TituloTramite, Descripcion,LayoutRegistrado,TablaTurnos,TablaTurnosAsesoramiento},

    props: {
        dataUser: Array,
        errors: Object
    },

    data () {
        return {
            form: this.$inertia.form({
                user_id: this.$page.props.user.id,
                nombre: this.$page.props.user.nombre,
                apellido: this.$page.props.user.apellido,
                telefono: this.$page.props.user.telefono,
                correo: this.$page.props.user.email,
                domicilio: this.$page.props.user.domicilio,
                localidad_id: this.$page.props.user.localidad_id,
                tipo_persona_id: this.$page.props.user.tipo_persona_id,
                current_pass: null,
                password: null,
                password2: null
            }),
            dialog: false
        }
    },
    methods: {
        submit(){
                //console.log(this.form.user_id)
                Inertia.post('/cambiar-contrasena', this.form, {
                    onSuccess: page => {
                        this.dialog = true
                    }
                });


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
