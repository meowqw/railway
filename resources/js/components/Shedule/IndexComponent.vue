<template>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Поезд</th>
            <th scope="col">От куда</th>
            <th scope="col">Куда</th>
            <th scope="col">Время отправления</th>
            <th scope="col">Время в пути</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="schedule in schedules">
            <th scope="row">{{ schedule.id }}</th>
            <th scope="row">{{ schedule.train.number }}</th>
            <th scope="row">{{ schedule.from.name }}</th>
            <th scope="row">{{ schedule.to.name }}</th>
            <th scope="row">{{ schedule.date }}</th>
            <th scope="row">{{ schedule.travel_time }}</th>
            <td v-if="$parent.authenticated">
                <button @click="deleteSchedule(schedule.id)" class="btn btn-danger">Удалить</button>
            </td>

        </tr>
        </tbody>

        <tbody v-if="$parent.authenticated">
        <tr>
            <th></th>
            <th>
                <select v-model="scheduleForm.train_id" class="form-control" id="train">
                    <option v-for="train in trains" :value="train.id">{{ train.number }}</option>
                </select></th>
            <th>
                <select v-model="scheduleForm.departure_locality_id" class="form-control" id="from">
                    <option v-for="locality in localities" :value="locality.id">{{ locality.name }}</option>
                </select></th>
            <th>
                <select v-model="scheduleForm.arrival_locality_id" class="form-control" id="to">
                    <option v-for="locality in localities" :value="locality.id">{{ locality.name }}</option>
                </select></th>
            <th><input v-model='scheduleForm.date' class="form-control" placeholder="Дата отправления" type="date"></th>
            <th><input v-model='scheduleForm.travel_time' class="form-control" placeholder="Время в пути" type="number">
            </th>
            <th>
                <button @click="addSchedules" class="btn btn-success">Добавить</button>
            </th>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "IndexScheduleComponent",
    data() {
        return {
            schedules: null,
            localities: null,
            trains: null,
            scheduleForm: {
                train_id: null,
                departure_locality_id: null,
                arrival_locality_id: null,
                date: null,
                travel_time: null,
            }
        }
    },
    methods: {
        getData() {
            axios.get('/api/schedules').then(response => {

                this.schedules = response.data.data
                console.log( this.schedules )
            });
        },

        getTrains() {
            axios.get('/api/localities').then(response => {
                this.localities = response.data
            });
        },

        getLocality() {
            axios.get('/api/trains').then(response => {
                this.trains = response.data
            });
        },
        addSchedules() {
            axios.post('/api/schedules', this.scheduleForm).then(response => {
                this.schedules.push(response.data.data)
            });
        },
        deleteSchedule(id) {
            axios.delete(`/api/schedules/${id}`).then(response => {
                let index = this.schedules.map(item => item.id).indexOf(id);
                this.schedules.splice(index, 1);
            });
        },

    },
    mounted() {
        this.getData()
        this.getTrains()
        this.getLocality()
        this.$parent.checkAuthentication()
    }
}
</script>

<style scoped>

</style>
