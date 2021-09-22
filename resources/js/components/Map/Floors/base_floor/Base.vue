<template>
    <div class="relative flex justify-center" style="height: 930px;">
        <div class="text-xl text-gray-700">Base floor</div>
        <BasePlan />
        <BaseRoutes :nodes="nodes" :showAllRoutes="showAllRoutes"/>
    </div>
</template>

<script>
import BasePlan from './BasePlan.vue'
import BaseRoutes from './BaseRoutes.vue'

export default {
    name: 'Base',
    components: {
        BasePlan,
        BaseRoutes
    },
    props: {
        nodes: null,
        showAllRoutes: null
    }
}
</script>
