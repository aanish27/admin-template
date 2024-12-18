window._ = require("lodash");
window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

require("bootstrap");
require("popper.js");
require("../assets/fontawesome/js/all.min.js");
require("../assets/adminlte/js/adminlte.min.js");
require("../assets/adminlte/plugins/js/jquery.min.js");
require("../assets/adminlte/plugins/js/popper.min.js");
window.$ = require("jquery")
