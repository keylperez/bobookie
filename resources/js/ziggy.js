const Ziggy = {
  url: "http://localhost",
  port: null,
  defaults: {},
  routes: { "admin.movies": { uri: "admin/movies", methods: ["GET", "HEAD"] } },
};

if (typeof window !== "undefined" && typeof window.Ziggy !== "undefined") {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
