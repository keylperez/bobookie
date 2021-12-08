require("./bootstrap");

import { createApp } from "vue";

// import App from "./App.vue";
// import router from "./router";
import store from "./store";
import HeaderVue from "./components/HeaderVue.vue";
import Login from "./views/Login.vue";

createApp({
  components: {
    HeaderVue,
    Login,
  },
})
  // .use(router)
  .use(store)
  .mount("#app").config.errorHandler = (err) => {
  alert(err);
};

// app.use(store);
// app.use(router);
// app.mount("#app");
