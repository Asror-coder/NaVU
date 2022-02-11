<template>
    <div class="p-2 w-full shadow-md">
        <NodeInfo :node="node" />
        <NodeRoutes :node="node" :nodes="nodes" :changeRoutes="getRoutes"
            @renewRoutes="renewRoutes" @removeRenewNodeId="removeRenewNodeId"/>
        <NodeCrowd :node="node" />
    </div>
</template>

<script>
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
