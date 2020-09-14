import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/pages/Home'
import ManagerProducts from '@/pages/manager/ManagerProducts'
import ManagerCategory from '@/pages/manager/ManagerCategory'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/gerenciar-produtos',
      name: 'gerenciarProdutos',
      component: ManagerProducts
    },
    {
      path: '/gerenciar-categorias',
      name: 'gerenciarCategorias',
      component: ManagerCategory
    }
  ]
})