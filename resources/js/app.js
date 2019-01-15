/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import {TinkerComponent} from 'botman-tinker';

Vue.component('botman-tinker', TinkerComponent);

Vue.component('flash', require('./components/Flash.vue'));
Vue.component('action-component', require('./components/ActionComponent.vue'));
Vue.component('paginator', require('./components/Paginator.vue'));
Vue.component('sidebar', require('./components/Sidebar.vue'));
Vue.component('avatar-form', require('./components/AvatarForm.vue'));
Vue.component('post-image-form', require('./components/PostImageForm.vue'));
Vue.component('user-notifications', require('./components/UserNotifications.vue'));
Vue.component('wysiwyg', require('./components/Wysiwyg.vue'));

Vue.component('post-view', require('./pages/Post.vue'));

const app = new Vue({
    el: '#yesayasoftware'
});