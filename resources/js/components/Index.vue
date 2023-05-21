<template>

    <div class="p-5">
        <h2>Расписание и информация ЖД вокзала <span class="badge badge-secondary">New</span></h2>
        <NavbarComponent></NavbarComponent>
        <router-view></router-view>
    </div>

</template>

<script>
import NavbarComponent from "./NavbarComponent.vue";
export default {
    name: "Index",
    data() {
        return {
            authenticated: false
        }
    },
    components: {
        NavbarComponent
    },
    methods: {
        checkAuthentication() {
            axios.get('/api/user')
                .then(response => {
                    this.authenticated = response.data.authenticated;
                })
                .catch(error => {
                    console.error(error);
                });
        },
    }
}
</script>

<style scoped>

</style>
