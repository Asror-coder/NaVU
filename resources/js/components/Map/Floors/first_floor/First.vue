<template>
    <div class="relative flex justify-center" style="height: 930px;">
        <div class="text-xl text-gray-700">First floor</div>
        <FirstPlanVue />
        <FirstRoutesVue :nodes="nodes" :showAllRoutes="showAllRoutes"/>
    </div>
</template>

<script>
import Line from '../components/line.vue'
import FirstPlanVue from './FirstPlan.vue'
import FirstRoutesVue from './FirstRoutes.vue'

export default {
    name: 'First',
    components: {
        Line,
        FirstPlanVue,
        FirstRoutesVue
    },
    props: {
        nodes: null,
        showAllRoutes: null
    }
}
</script>
