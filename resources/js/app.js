import { createApp, h } from 'vue'
import { createStore } from 'vuex'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

const store = createStore({
  modules: {

  }
})

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(store)
      .mount(el)
  },
});

InertiaProgress.init({
  delay: 250,
  color: '#FEB155',
  includeCSS: true,
  showSpinner: true,  
})