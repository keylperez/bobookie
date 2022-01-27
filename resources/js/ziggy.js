const Ziggy = {
  // url: "http://localhost:8000",
  url: "http://127.0.0.1:8000",
  port: null,
  defaults: {},
  routes: {
    login: { uri: "/", methods: ["GET", "HEAD"] },
    home: { uri: "discover", methods: ["GET", "HEAD"] },
    book: { uri: "book/{id}", methods: ["GET", "HEAD"] },
    details: { uri: "details/{movie}", methods: ["GET", "HEAD"] },
    movies: { uri: "movies", methods: ["GET", "HEAD"] },
  },
};

if (typeof window !== "undefined" && typeof window.Ziggy !== "undefined") {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };