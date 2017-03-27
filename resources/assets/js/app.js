
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('dashboardmenu', require('./components/DashboardMenu.vue'));

/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles', 'http://localhost:8000/particles.json', function() {});

var sidebar = new Vue({
    el: '#sidebar',
    data: {
        title: 'Laravel + Vue'
    },
    computed:  {
        titleUppercase: function() {
            return this.title.toUpperCase();
        }
    }
});

var app = new Vue({
    el: '#app'
});
