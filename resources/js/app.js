require('./bootstrap');

// Import modules...
import Vue from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue';
import PortalVue from 'portal-vue';
import vuetify from '../plugins/vuetify.js' // path to vuetify export
import svgJs from "../plugins/vueSvgPlugin"
import Notifications from 'vue-notification'

Vue.mixin({ methods: { route } });
Vue.use(InertiaPlugin);
Vue.use(PortalVue);
Vue.use(svgJs);
Vue.use(Notifications);

const app = document.getElementById('app');

new Vue({
    svgJs,
    Notifications,
    vuetify,
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
