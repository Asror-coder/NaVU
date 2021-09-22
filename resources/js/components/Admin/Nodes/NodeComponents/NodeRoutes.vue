<template>
    <div class="flex flex-row">
        <div class="flex-none text-gray-500">Routes: </div>

        <div v-if="routes && routes.length <= 0" class="text-gray-400 ml-2 flex-none">null</div>

        <div v-else-if="routes && routes.length > 0" :key="route.id" v-for="route in routes" class="ml-4">
            <div >{{route.name}}</div>
        </div>

        <div class="flex-grow"></div>

        <div class="flex-none flex flex-row">
            <form @submit.prevent="deleteRoute" v-if="showDeleteRoute && !showAddRoute">
                <div class="flex flex-row">
                    <select name="start-time" v-model="deletedRoute" required
                        class="bg-gray-100 border-2 rounded focus:outline-none mr-2">
                        <option value="" disabled selected hidden>routes</option>
                        <option :value="route.id" :key="route.id" v-for="route in routes">
                            {{ route.name }}
                        </option>
                    </select>

                    <div class="flex-none">
                        <button class="bg-red-700 text-white rounded px-1 focus:outline-none hover:shadow-lg"
                            type="submit" >Delete</button>
                    </div>
                </div>
            </form>

            <form @submit.prevent="addRoute" v-if="!showDeleteRoute && showAddRoute">
                <div class="flex flex-row">
                    <select name="start-time" v-model="newRoute" required
                        class="bg-gray-100 border-2 rounded focus:outline-none mr-2">
                        <option value="" disabled selected hidden>nodes</option>
                        <option :value="node.id" :key="node.id" v-for="node in nodes">
                            {{ node.name }}
                        </option>
                    </select>

                    <div class="flex-none">
                        <button class="bg-green-500 text-white rounded px-1 focus:outline-none hover:shadow-lg"
                            type="submit" >Add</button>
                    </div>
                </div>
            </form>

            <Button v-show="!showDeleteRoute" @btn-click="toggleAddRoute"
                    :text="showAddRoute ? 'Close' : 'Add route'"
                    :textColor="showAddRoute ? 'text-red-600' : 'text-gray-700'" />

            <Button v-show="!showAddRoute" @btn-click="toggleDeleteRoute"
                    :text="showDeleteRoute ? 'Close' : 'Delete route'"
                    :textColor="showDeleteRoute ? 'text-green-800' : 'text-red-600'" />
        </div>
    </div>
    <div class="text-center text-red-700" v-if="message">{{message}}</div>
</template>

<script>
import Button from './Button'

export default {
    name: 'NodeRoutes',
    emits: ["renewRoutes","removeRenewNodeId"],
    components: {
        Button
    },
    props: {
        node: null,
        nodes: null,
        changeRoutes: null
    },
    data() {
        return {
            showAddRoute: false,
            showDeleteRoute: false,

            deletedRoute: null,
            newRoute: null,
            routes: null,
            message: null,
            errors: []
        }
    },
    methods: {
        async addRoute() {
            var request = {
                node1: this.node.id,
                node2: this.newRoute
            }

            //This function should be disabled at the end of development period

            // await axios.post(`/api/route/store`, request).then((response)=> {
            //     if(response.data.message) this.message = response.data.message[0]
            //     else {
            //         this.getRoutes()
                    this.toggleAddRoute()
            //         if (this.message) this.message = null
            //         this.$emit('renewRoutes', this.newRoute)
            //     }
            // }).catch((error) => {
            //     console.log(error.response.data);
            // })
        },
        async deleteRoute() {
            //This function should be disabled at the end of development period

            // await axios.delete('/api/route/delete', {
            //     data: {
            //         node1: parseInt(this.deletedRoute),
            //         node2: parseInt(this.node.id)
            //     }
            // }).then((response)=>{
            //     this.getRoutes()
                this.toggleDeleteRoute()
            //     this.$emit('renewRoutes', this.deletedRoute)
            // }).catch((error) => {
            //     console.log(error.response.data.errors);
            // })
        },
        toggleAddRoute() {
            this.showAddRoute = !this.showAddRoute
        },
        toggleDeleteRoute() {
            this.showDeleteRoute = !this.showDeleteRoute
        },
        async getRoutes() {
            await axios.get(`/api/route/node/${this.node.id}`).then((response)=>{
                this.routes = response.data;
                if(this.changeRoutes) this.$emit('removeRenewNodeId')
            }).catch((error) => {
                console.log(error.response.data.errors);
            })
        }
    },
    mounted() {
        this.getRoutes()
    },
    watch: {
        changeRoutes: {
            immediate: true,
            handler (newVal, oldVal) {
                if (newVal == this.node.id) this.getRoutes()
            }
        }
    }
};
</script>
