<template>
    <div>
        <menu-component></menu-component>
        <router-view></router-view>
    </div>
</template>

<script>
import MenuComponent from './MenuComponent.vue';
export default {
    name: 'App',
    components:{MenuComponent}
}
</script>

<style>
#app{
    min-height: 100vh;
    width: 100vw;
}
</style>


