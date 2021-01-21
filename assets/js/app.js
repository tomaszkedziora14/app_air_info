
import 'bootstrap/dist/css/bootstrap.min.css';

import Vue from 'vue';
Vue.config.productionTip = false
import App from './components/App';

console.log('ddd');

new Vue({
  template: '<App />',
  components: { App },
})
