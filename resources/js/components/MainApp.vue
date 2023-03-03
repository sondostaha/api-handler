<template>
    <div class="container-fluid">
       <Notifiication/>
       <div class="content pt-4">
         <router-view></router-view>
       </div>
    </div>
</template>

<script>
import Notifiication from './Notifiication.vue';

    export default {
    name: "main-app",
    components: { Notifiication }
}
</script>
