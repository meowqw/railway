import Vue from 'vue'
import VueRouter from "vue-router";
import SheduleComponent from "./components/Shedule/IndexComponent.vue";
import TrainComponent from "./components/Train/IndexComponent.vue";
import InformationComponent from "./components/Information/IndexComponent.vue";
import LocalityComponent from "./components/Locality/IndexComponent.vue";

require('./bootstrap');

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/shedule',
            component: SheduleComponent
        },
        {
            path: '/train',
            component: TrainComponent
        },
        {
            path: '/information',
            component: InformationComponent
        },
        {
            path: '/locality',
            component: LocalityComponent
        }
    ]
});
