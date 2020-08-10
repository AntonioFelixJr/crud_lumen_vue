import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'

Vue.config.productionTip = false
Vue.prototype.$http = axios
Vue.prototype.$endpoint = 'https://restcountries-v1.p.rapidapi.com/name/brazil'
Vue.prototype.$endpoint = 'http://127.0.0.1:8000/users'

new Vue({
  render: h => h(App),
}).$mount('#app')
