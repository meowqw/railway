<template>
    <ul class="nav nav-tabs">
        <li class="nav-item">


            <router-link to="information" :class="checkPath('/information') ? 'nav-link activate' : 'nav-link'">
                Информация
            </router-link>
        </li>
        <li class="nav-item">
            <router-link to="schedule" :class="checkPath('/schedule') ? 'nav-link activate' : 'nav-link'">
                Расписание
            </router-link>
        </li>
        <li class="nav-item" v-if="$parent.authenticated">
            <router-link to="train" :class="checkPath('/train') ? 'nav-link activate' : 'nav-link'">
                Поезда
            </router-link>
        </li>
        <li class="nav-item" v-if="$parent.authenticated">
            <router-link to="locality" :class="checkPath('/locality') ? 'nav-link activate' : 'nav-link'">
                Населенные пункты
            </router-link>
        </li>
    </ul>
</template>

<script>
export default {
    name: "NavbarComponent",
    methods: {
        checkPath(path) {
            return this.$route.path === path;
        }
    }
}
</script>

<style scoped>

</style>
