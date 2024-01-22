document.addEventListener('DOMContentLoaded', function () {
  const swup = new Swup(); // Initialize Swup
  swup.options = {
      ...swup.options,
      plugins: [
          new SwupScrollPlugin(),
          new SwupPreloadPlugin(),
          new SwupDebugPlugin(),
          new SwupGAPlugin(),
      ],
  };

});
