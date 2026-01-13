import './bootstrap';
import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {vuetify} from "./plugins/vuetify.js";
import DefaultLayout from "./Layout/DefaultLayout.vue";

createInertiaApp({
    resolve: async (name) => {
        const page = await resolvePageComponent(
            (`./Pages/${name}.vue`),
            import.meta.glob('./Pages/**/*.vue')
        );
        page.default.layout = page.default.layout || DefaultLayout;
        return page;
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(vuetify)
            .mount(el)
    },
});
