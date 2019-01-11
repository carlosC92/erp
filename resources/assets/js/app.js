
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import axios from 'axios';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data:{
        user:null,
        password:null,
        errorMessage:[]
    },
    methods: {
        onSubmit(e){
            if(this.user && this.password){
                var formAction = e.target.action;
                let productReview ={
                    user:this.user,
                    password:this.password
                }
                axios.post(formAction,{
                    user:this.user,
                    password:this.password
                }).then(response=>{
                    console.log(response);
                    this.user = null;
                    this.password = null;
                })
            }else{
                if(!this.name) this.errorMessage.push("Nombre Requerido");
                if(!this.user) this.errorMessage.push("Password Requerido")
            }
          
        }
    },
});
