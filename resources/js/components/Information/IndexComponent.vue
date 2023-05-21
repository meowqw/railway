<template>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Описание</th>
            <th scope="col" v-if="$parent.authenticated">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="info in information">
            <th scope="row">{{ info.id }}</th>
            <th scope="row">{{ info.title }}</th>
            <th scope="row">{{ info.description }}</th>
            <td v-if="$parent.authenticated">
                <button @click="deleteInformation(info.id)" class="btn btn-danger">Удалить</button>
            </td>

        </tr>
        </tbody>

        <tbody v-if="$parent.authenticated">
        <tr>
            <th><input v-model='informationForm.title' class="form-control" placeholder="Заголовок" type="text"></th>
            <th><textarea
                v-model='informationForm.description' class="form-control"
                placeholder="Описание"
                type="text">

            </textarea></th>
            <th></th>
            <th>
                <button @click="addInformation" class="btn btn-success">Добавить</button>
            </th>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "IndexInformationComponent",
    data() {
        return {
            information: null,
            informationForm: {
                title: null,
                description: null
            }
        }
    },
    methods: {
        getData() {
            axios.get('/api/information').then(response => {
                this.information = response.data
            });
        },
        addInformation() {
            axios.post('/api/information', this.informationForm).then(response => {
                this.information.push(response.data)
            });
        },
        deleteInformation(id) {
            axios.delete(`/api/information/${id}`).then(response => {
                let index = this.information.map(item => item.id).indexOf(id);
                this.information.splice(index, 1);
            });
        }
    },
    mounted() {
        this.getData()
        this.$parent.checkAuthentication()
    }
}
</script>

<style scoped>

</style>
