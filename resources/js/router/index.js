import Vue from 'vue'
import Router from 'vue-router'
import Login from '../components/login/Index'



Vue.use(Router)

export default new Router({
  routes: [

    {
      path: '/login',
      name: 'login',
      component: Login
    },

  ],
  mode: 'hash'
})
