<template>
    <div>
        <SearchPathExample @searchPath="searchPath" :passedNodes="nodes" v-if="nodes"/>

        <div v-if="pathNodes" class="flex flex-row mt-6">
            <div :key="pathNode.id" v-for="(pathNode, index) in pathNodes" class="mr-5 flex flex-row justify-center">
                <div class="bg-safeWalk text-white p-3 rounded-lg ml-3 shadow-md"
                    v-if="pathNode.crowd_status_id == 1">{{pathNode.name}}</div>

                <div class="bg-semiSafeWalk text-white p-3 rounded-lg ml-3 shadow-md"
                    v-else-if="pathNode.crowd_status_id == 2">{{pathNode.name}}</div>

                <div class="bg-safeStay text-white p-3 rounded-lg ml-3 shadow-md"
                    v-else-if="pathNode.crowd_status_id == 3">{{pathNode.name}}</div>

                <div class="bg-semiSafeStay text-white p-3 rounded-lg ml-3 shadow-md"
                    v-else-if="pathNode.crowd_status_id == 4">{{pathNode.name}}</div>

                <div class="bg-notSafe text-white p-3 rounded-lg ml-3 shadow-md"
                    v-else-if="pathNode.crowd_status_id == 5">{{pathNode.name}}</div>

                <div class="bg-crowded text-white p-3 rounded-lg ml-3 shadow-md"
                    v-else-if="pathNode.crowd_status_id == 6">{{pathNode.name}}</div>

                <span class="text-4xl ml-8" v-show="index != pathNodes.length - 1">&#8594;</span>
            </div>
        </div>

        <Example :nodes="pathNodes ? pathNodes : nodes" v-if="nodes" class="mt-5"/>
    </div>
</template>

<script>
import axios from 'axios';
import Example from '../Map/Floors/Example.vue'
import SearchPathExample from './SearchPathExample.vue'

export default {
    name: 'Nodes',
    components: {
        SearchPathExample,
        Example
    },
    data() {
        return {
            pathNodes: null,
            nodes: null
        }
    },
    methods: {
        async searchPath(request) {
            await axios.get('/api/path', {params: request}).then((response)=>{
                if(response.data.length > 0) this.pathNodes = response.data;
            }).catch((error) => {
                console.log(error.response.data.errors);
            })
        },
    },
    async mounted() {
        await axios.get(`/api/node/floor/example`).then((response)=>{
            if(response.data.length > 0) this.nodes = response.data;
        }).catch((error) => {
            console.log(error.response.data.errors);
        })
    }
}
</script>
