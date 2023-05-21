<template>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Номер</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="train in trains">
            <th scope="row">{{ train.id }}</th>
            <th scope="row">{{ train.number }}</th>
            <td>
                <button @click="deleteTrain(train.id)" class="btn btn-danger">Удалить</button>
            </td>

        </tr>
        </tbody>

            <tbody>
            <tr>
                <th><input v-model='trainForm.number' class="form-control" placeholder="Номер поезда" type="text"></th>
                <th></th>
                <th>
                    <button @click="addTrain" class="btn btn-success">Добавить</button>
                </th>
            </tr>
            </tbody>
    </table>
</template>

<script>
export default {
    name: "IndexTrainComponent",
    data() {
        return {
            trains: null,
            trainForm: {
                number: null
            }
        }
    },
    methods: {
        getData() {
            axios.get('/api/trains').then(response => {
                this.trains = response.data
            });
        },
        addTrain() {
            axios.post('/api/trains', this.trainForm).then(response => {
                this.trains.push(response.data)
            });
        },
        deleteTrain(id) {
            axios.delete(`/api/trains/${id}`).then(response => {
                let index = this.trains.map(item => item.id).indexOf(id);
                this.trains.splice(index, 1);
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
