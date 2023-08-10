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


