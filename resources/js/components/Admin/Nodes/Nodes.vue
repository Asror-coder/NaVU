<template>
    <div>
        <div :key="node.id" v-for="node in nodes" class="mt-4">
            <NodeCard :node="node" :nodes="nodes" :getRoutes="renewNodeId"
                @renewRoutes="renewNode" @removeRenewNodeId="removeRenewNodeId"/>
        </div>
    </div>
</template>

<script>
import NodeCard from './NodeCard.vue'

export default {
    name: 'Nodes',
    components: {
        NodeCard,
    },
    props: {
        nodes: null
    },
    data() {
        return {
            renewNodeId: null
        }
    },
    methods: {
        renewNode(nodeId) {
            this.renewNodeId = nodeId
        },
        removeRenewNodeId() {
            this.renewNodeId = null
        }
    }
}
</script>
