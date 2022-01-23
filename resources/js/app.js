import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { ZiggyVue } from "ziggy";
import { Ziggy } from "./ziggy";
import Layout from "./Shared/Layout.vue";

createInertiaApp({
  resolve: async (name) => {
    let page = (await import(`./Pages/${name}`)).default;

    page.layout ??= Layout;

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Link", Link)
      .component("Head", Head)
      .mount(el)
      .use(ZiggyVue, Ziggy);
  },
  title: (title) => `${title} - Bobookie`,
});

InertiaProgress.init({
  delay: 250,
  color: "#FEB155",
  includeCSS: true,
  showSpinner: true,
});
