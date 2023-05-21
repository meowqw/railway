<template>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="locality in localities">
            <th scope="row">{{ locality.id }}</th>
            <th scope="row">{{ locality.name }}</th>
            <td>
                <button @click="deleteLocality(locality.id)" class="btn btn-danger">Удалить</button>
            </td>

        </tr>
        </tbody>

        <tbody>
        <tr>
            <th><input v-model='localityForm.name' class="form-control" placeholder="Название" type="text"></th>
            <th></th>
            <th>
                <button @click="addLocality" class="btn btn-success">Добавить</button>
            </th>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "IndexLocalityComponent",
    data() {
        return {
            localities: null,
            localityForm: {
                name: null
            }
        }
    },
    methods: {
        getData() {
            axios.get('/api/localities').then(response => {
                this.localities = response.data
            });
        },
        addLocality() {
            axios.post('/api/localities', this.localityForm).then(response => {
                this.localities.push(response.data)
            });
        },
        deleteLocality(id) {
            axios.delete(`/api/localities/${id}`).then(response => {
                let index = this.localities.map(item => item.id).indexOf(id);
                this.localities.splice(index, 1);
            });
        }
    },
    mounted() {
        this.getData()
    }
}
</script>

<style scoped>

</style>
