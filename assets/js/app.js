/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../styles/app.css';

// start the Stimulus application
import './bootstrap';

import * as Vue from 'vue';
import DemoComponent from '../components/DemoComponent';

const app = Vue.createApp({
  data (){
    return {
      title:'Yo mec',
    }
  }
});

app.component('demotest', {
  template: 'component dans app.js'
})

app.mount('#app');