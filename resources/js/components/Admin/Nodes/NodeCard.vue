<template>
    <div class="p-2 w-full shadow-md">
        <NodeInfo :node="node" />
        <NodeRoutes :node="node" :nodes="nodes" :changeRoutes="getRoutes"
            @renewRoutes="renewRoutes" @removeRenewNodeId="removeRenewNodeId"/>
        <NodeCrowd :node="node" />
        <NodeCO2 :node="node"/>
    </div>
</template>

<script>
import NodeCO2 from './NodeComponents/NodeCO2.vue'
import NodeCrowd from './NodeComponents/NodeCrowd.vue'
import NodeInfo from './NodeComponents/NodeInfo.vue'
import NodeRoutes from './NodeComponents/NodeRoutes.vue'

export default {
    name: 'NodeCard',
    emits: ["renewRoutes","removeRenewNodeId"],
    components: {
        NodeInfo,
        NodeRoutes,
        NodeCrowd,
        NodeCO2
    },
    props: {
        node: null,
        nodes: null,
        getRoutes: null
    },
    methods: {
        renewRoutes(nodeId) {
            this.$emit('renewRoutes', nodeId)
        },
        removeRenewNodeId(){
            this.$emit('removeRenewNodeId')
        },
    }
}
</script>
