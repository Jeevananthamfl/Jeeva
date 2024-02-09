var prestoDOMReady = function (callback) {
  document.readyState === "interactive" || document.readyState === "complete"
    ? callback()
    : document.addEventListener("DOMContentLoaded", callback);
};
prestoDOMReady(function () {
  const url = window?.parent?.prestoComponents?.url || window.prestoComponents?.url;
  if (url) {
    var script = document.createElement("script");
    script.type = "module";
    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
  }
});

/*This file was exported by "Export WP Page to Static HTML" plugin which created by ReCorp (https://myrecorp.com) */