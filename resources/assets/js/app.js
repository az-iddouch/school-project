import "./bootstrap";
window.Vue = require("vue");

import CartItem from "./components/CartItem.vue";

const app = new Vue({
    el: "#app",
    components: {
        cartItem: CartItem
    }
});
