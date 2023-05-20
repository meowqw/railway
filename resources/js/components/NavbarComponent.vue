<template>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href='#' :class="checkPath('/information') ? 'nav-link activate' : 'nav-link'"
               @click.prevent="$router.push('/information')">Иноформация</a>
        </li>
        <li class="nav-item">
            <a href='#' :class="checkPath('/shedule') ? 'nav-link activate' : 'nav-link'"
               @click.prevent="$router.push('/shedule')">Расписание</a>
        </li>
        <li class="nav-item">
            <a href='#' :class="checkPath('/train') ? 'nav-link activate' : 'nav-link'"
               @click.prevent="$router.push('/train')">Поезда</a>
        </li>
        <li class="nav-item">
            <a href='#' :class="checkPath('/locality') ? 'nav-link activate' : 'nav-link'"
               @click.prevent="$router.push('/locality')">Населенные
            пункты</a>
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
