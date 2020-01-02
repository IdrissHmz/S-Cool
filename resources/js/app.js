/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import ExampleComponent from "./components/ExampleComponent";

require('./bootstrap');

window.Vue = require('vue');
import vuetify from './vuetify';
import VueRouter from 'vue-router';
import CrudAdmins from "./components/CrudAdmins";
import Crud from "./components/Crud";
import CrudUsers from "./components/CrudUsers";
import CrudStudents from "./components/CrudStudents";
import CrudMarks from "./components/CrudMarks";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))




Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('test-vue', require('./components/TestVue.vue').default);
Vue.component('login-form', require('./components/LoginForm.vue').default);
Vue.component('side-bar', require('./components/SideBar.vue').default);
Vue.component('crud', require('./components/Crud.vue').default);
Vue.component('crud-user', require('./components/CrudUsers.vue').default);
Vue.component('crud-admin', require('./components/CrudAdmins.vue').default);
Vue.component('crud-student', require('./components/CrudStudents.vue').default);
Vue.component('crud-mark', require('./components/CrudMarks.vue').default);


Vue.use(VueRouter);
Vue.config.productionTip = false ;
const router = new VueRouter({
    routes: [
        { path:'/admin/dashboard/admins',component: CrudAdmins},
        { path:'/admin/dashboard/teachers',component: Crud},
        { path:'/admin/dashboard/users',component: CrudUsers},
        { path:'/admin/dashboard/students',component: CrudStudents},
        { path:'/admin/dashboard/marks',component: CrudMarks},
    ],
    mode:history,
})


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    vuetify,
    el: '#app',
    router,
});
