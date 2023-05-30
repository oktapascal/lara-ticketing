import './bootstrap'
import {createApp, h, onBeforeUpdate, onUpdated} from 'vue'
import { createInertiaApp } from "@inertiajs/vue3"
import VueSweetalert2 from 'vue-sweetalert2'
import { Tooltip } from 'bootstrap'

import '../sass/main.css'
import 'bootstrap-icons/font/bootstrap-icons.min.css'
import 'sweetalert2/dist/sweetalert2.min.css'
import tooltip from "bootstrap/js/src/tooltip.js";

createInertiaApp({
    title: (title) => 'Esaku TKM',
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    }, setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })

        app.use(plugin)
        app.use(VueSweetalert2)

        app.directive('tooltip', {
            created(el, binding, vnode, prevVnode) {
                new Tooltip(el, {
                    container: 'body',
                    title: binding.value,
                    placement: binding.arg,
                    trigger: 'hover',
                })
            },
        })

        app.mount(el)
    }
})
