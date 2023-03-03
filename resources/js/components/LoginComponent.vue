<template>
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form @submit.prevent="login">
                            <div class="form-goup row" v-if="auth_error">
                                <p class="error">
                                    {{ auth_error }}
                                </p>
                            </div>
                            
                            <div class="form-group row">
                                <label for="email" class="col-4 col-form-lable text-right">Email</label>
                                <div class="col-6">
                                    <input type="text" name="email" id="email" v-model="form.email" required class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-4 col-form-lable text-right">Password</label>
                                <div class="col-6">
                                    <input type="password" name="password" id="password" v-model="form.password" required class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-8 offset-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { login } from '../auth';
export default {

    name: 'login-component',

    data(){
        return{
            form: {
                email: '',
                password: '',
            },
            error: null ,
        }
    },

    method:{
        login(){
            this.$store.despatch('login')
            login(this.$data.form).then(res =>{
                this.$store.commit('loginSuccess',res)
                this.$router.puch('/dashboard');
            }).catch(err =>{
                this.$store.commit('loginFailed');
            })
        }
    },

    computed: {
        auth_error(){
            return this.$store.getters.auth_error
        },
        registeredUser(){
            return this.$store.getters.registeredUser
        }
    }

}
</script>
<style scoped>

    .error{
        text-align: center;
        color: red;
    }

</style>