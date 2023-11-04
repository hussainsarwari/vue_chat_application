import { createRouter, createWebHashHistory } from 'vue-router'
import Mainpage from '../views/Mainpage.vue'
import Test from '../views/Test.vue'
import home from '../views/Login.vue'
import Register from '../views/Register.vue'
import Account from '../views/Account.vue'


const routes = [
  {
    path: '/',
    name: 'home',
    component: home
  },
  
  {
    path: '/Mainpage',
    name: 'Mainpage',
    component: Mainpage
  }
  ,
  
  {
    path: '/Account',
    name: 'Account',
    component: Account
  }
  ,
  {
    path: '/Test',
    name: 'Test',
    component: Test
  }
  ,
  {
    path: '/Register',
    name: 'Register',
    component: Register
  }
  
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
