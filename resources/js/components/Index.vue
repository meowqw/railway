<template>

    <div class="p-5">
        <NavbarComponent></NavbarComponent>
        <router-view></router-view>
    </div>

</template>

<script>
import NavbarComponent from "./NavbarComponent.vue";
export default {
    name: "Index",
    components: {
        NavbarComponent
    }
}
</script>

<style scoped>

</style>
