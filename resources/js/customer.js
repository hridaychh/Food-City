/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('place-order', require('./customer/PlaceOrder.vue').default);

Vue.component('order-history', require('./customer/OrderHistory.vue').default);

Vue.component('favourite-order-history', require('./customer/FavouriteOrders.vue').default);

Vue.component('order-details', require('./customer/components/OrderDetails.vue').default);

Vue.component('alert-tost', require('./customer/components/Tost.vue').default);

Vue.component('customer-profile', require('./customer/Profile.vue').default);

new Vue({
    el: '#customer-app',
});
