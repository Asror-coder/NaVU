<template>
    <div class="p-4">
        <AddNode @addNode="addNode" :message="message"/>

        <div class="w-1/4 mt-3">
            <form @change="getFloorNodes" class="flex-none">
                <select name="floor" v-model="floor" required
                    class="bg-gray-100 p-2 shadow-lg rounded focus:outline-none w-full">
                    <option value="" disabled selected hidden>Floor</option>
                    <option value="example">Example</option>
                    <option value="base">Base</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                </select>
            </form>
        </div>

        <Nodes v-if="nodes" :nodes="nodes"/>
        <div v-else-if="!nodes">
            No nodes yet
        </div>
    </div>
</template>

<script>
import AddNode from './AddNode.vue'
import Nodes from './Nodes/Nodes.vue'
import axios from 'axios';

export default {
    name: 'Admin',
    components: {
        AddNode,
        Nodes
    },
    data() {
        return {
            nodes: null,
            message: '',
            errors: '',
            floor: 'base'
        }
    },
    methods: {
        async fetchNodes() {
            console.log(this.floor);    //REMOVE

            await axios.get(`/api/node/floor/${this.floor}`).then((response)=>{
                if(response.data.length > 0) this.nodes = response.data;
            }).catch((error) => {
                console.log(error.response.data.errors);
            })

            // await axios.get('/api/node/all').then((response)=>{
            //     if(response.data.length > 0) this.nodes = response.data;
            // }).catch((error) => {
            //     console.log(error.response.data.errors);
            // })
        },
        addNode(node) {
            axios.post('/api/node/store', node).then((response)=>{
                if(response.data.message) {
                    this.message = response.data.message[0]
                } else this.nodes.unshift(response.data)
            }).catch((error) => {
                this.errors = error.response.data.errors;
                this.message = error.response.data.message;
            })
        }
    },
    watch: {
        floor: {
            immediate: true,
            handler (newVal, oldVal) {
                this.fetchNodes()
            }
        },
    }
}
</script>
