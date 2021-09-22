<template>
    <div>
        <div class="flex flex-row">
            <div v-show="!showSearchPath" class="mr-4 text-lg text-gray-700 pt-2">Choose floor: </div>
            <form @change="getFloorNodes" v-show="!showSearchPath" class="flex-none">
                <select name="floor" v-model="floor" required
                    class="bg-gray-100 p-2 shadow-lg rounded focus:outline-none w-full">
                    <option value="" disabled selected hidden>Floor</option>
                    <option value="base">Base</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                </select>
            </form>

            <div class="flex-grow"></div>
            <div class="flex-none">
                <Button @btn-click="toggleshowSearchPath"
                    :text="showSearchPath ? 'Close' : 'Search path'"
                    :textColor="showSearchPath ? 'text-red-600' : 'text-gray-700'"
                />
            </div>
        </div>

        <SearchPathForm @searchPath="searchPath" v-show="showSearchPath" :passedFloor="floor"/>

        <Floors :nodes="nodes" v-if="nodes" class="mt-6" :showAllRoutes="showAllRoutes"/>
    </div>
</template>

<script>
import axios from 'axios';
import Floors from './Floors.vue'
import Button from './Button.vue'
import SearchPathForm from './SearchPathForm.vue';

export default {
    name: 'Map',
    components: {
        Floors,
        SearchPathForm,
        Button
    },
    data() {
        return {
            nodes: null,
            showSearchPath: false,
            floor: 'base',
            showAllRoutes: null
        }
    },
    methods: {
        toggleshowSearchPath() {
            this.showSearchPath = !this.showSearchPath
        },
        async getFloorNodes() {
            await axios.get(`/api/node/floor/${this.floor}`).then((response)=>{
                if(response.data.length > 0) {
                    this.nodes = response.data;
                    this.showAllRoutes = true
                }
            }).catch((error) => {
                console.log(error.response.data.errors);
            })
        },
        async searchPath(request) {
            await axios.get('/api/path', {params: request}).then((response)=>{
                if(response.data.length > 0) {
                    this.nodes = response.data;
                    this.showAllRoutes = false
                }
            }).catch((error) => {
                console.log(error.response.data.errors);
            })
        },
    },
    mounted() {
        this.getFloorNodes()
    }
}
</script>
