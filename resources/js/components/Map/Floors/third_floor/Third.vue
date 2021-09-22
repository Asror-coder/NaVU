<template>
    <div class="relative flex justify-center" style="height: 930px;">
        <div class="text-xl text-gray-700">Third floor</div>
        <ThirdPlan />
        <ThirdRoutes :nodes="nodes" :showAllRoutes="showAllRoutes"/>
    </div>
</template>

<script>
import ThirdPlan from './ThirdPlan.vue'
import ThirdRoutes from './ThirdRoutes.vue'

export default {
    name: 'Third',
    components: {
        ThirdPlan,
        ThirdRoutes
    },
    props: {
        nodes: null,
        showAllRoutes: null
    }
}
</script>
