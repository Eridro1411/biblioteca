import Vue from 'vue';
import App from './App.vue';

import VueRouter from "vue-router";

import "style.css";

import List from "./components/List.vue";
import Detail from "./components/Detail.vue";
import Edit from "./components/Edit.vue";
import Create from "./components/Create.vue";

Vue.use(VueRouter)

Vue.config.productionTip = false

const routes = [
  {
    path: "/",
    redirect: "/list"
  },
  {
    path: "/list",
    component: List
  },
  {
    path: "/detail/:id",
    component: Detail
  },
  {
    path: "/edit/:id",
    component: Edit
  },
  {
    path: "/create",
    component: Create
  },
],

router = new VueRouter({
  mode: "history",
  routes
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
