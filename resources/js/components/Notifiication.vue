<template>
    <nav class="navbar-expand-lg navbar-light bg-white shadow-sm">

        <div class="container">
            <div class="navbar-header">
                <router-link class="navbar-brand" :to="{name:'home'}">Laravel Api</router-link>
            </div>
            <div class="nav navbar-nav">
                <router-link class="nav-item nav-link" :to="{name:'login'}" v-if="!currentUser" >Login</router-link>
                <router-link class="nav-item nav-link" :to="{name:'dashboard'}" v-if="currentUser" >Dashboard</router-link>
                <a v-if="currentUser" @click.prevent="logout" class="nav-item nav-link">LogOut</a>
            </div>
        </div>

    </nav>
</template>
<script>

export default {
    methods:{
        logout(){
            this.$store.commit('logout');
            this.$router.push('/login');
        }
    },
    computed:{
        currentUser(){
            return this.$store.getters.currentUser
        }
    },
    name: 'notification'
}
</script>