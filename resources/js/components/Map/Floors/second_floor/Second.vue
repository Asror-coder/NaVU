<template>
    <div class="relative flex justify-center" style="height: 930px;">
        <div class="text-xl text-gray-700">Second floor</div>
        <SecondPlan />
        <SecondRoutes :nodes="nodes" :showAllRoutes="showAllRoutes"/>
    </div>
</template>

<script>
import SecondPlan from './SecondPlan.vue';
import SecondRoutes from './SecondRoutes.vue'

export default {
    name: 'Second',
    components: {
        SecondPlan,
        SecondRoutes
    },
    props: {
        nodes: null,
        showAllRoutes: null
    }
}
</script>
