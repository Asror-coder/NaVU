<template>
    <div>
        <div class="grid grid-cols-4">
            <div class="flex">
                <label v-show="!showSearchPath" class="mr-4 text-lg text-gray-700 pt-2">Floor: </label>
                <form v-show="!showSearchPath"  v-if="floor" @change="getFloorNodes">
                    <select name="floor" v-model="floor" required
                        class="appearance-none bg-gray-100 p-2 shadow-lg rounded focus:outline-none w-full">
                        <option value="" disabled selected hidden>Floor</option>
                        <option value="base">Base</option>
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                    </select>
                </form>
            </div>

            <div class="col-span-2 flex justify-center">
                <label v-show="!showSearchPath" class="mr-4 text-lg text-gray-700 pt-2">Crowd state: </label>
                <form v-show="!showSearchPath" v-if="crowd_type" @change="changeCrowdType">
                    <select name="crowd_type" v-model="crowd_type" required
                        class="appearance-none bg-gray-100 p-2 shadow-lg rounded focus:outline-none w-full">
                        <option value="" disabled selected hidden>Crowd</option>
                        <option value="crowd_status_id">Real time</option>
                        <option value="simulation_1">Mornings</option>
                        <option value="simulation_2">Afternoon</option>
                        <option value="simulation_3">Night (empty)</option>
                        <option value="co2_crowd_level">CO2 level</option>
                    </select>
                </form>
            </div>

            <div class="flex justify-end">
                <Button @btn-click="toggleshowSearchPath"
                    :text="showSearchPath ? 'Close' : 'Search path'"
                    :style="showSearchPath ? 'text-red-600 hover:bg-gray-100' : 'text-gray-700 bg-green-200 hover:bg-green-300'"
                />
            </div>
        </div>

        <SearchPathForm @searchPath="searchPath" v-show="showSearchPath" :passedFloor="floor" :crowdType="crowd_type" />

        <Floors :nodes="nodes" v-if="nodes" class="mt-6" :showAllRoutes="showAllRoutes" :key="key" />
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
            floor: '',
            showAllRoutes: null,
            crowd_type: '',
            key: 0,
        }
    },
    methods: {
        toggleshowSearchPath() {
            this.showSearchPath = !this.showSearchPath
        },
        async getFloorNodes() {
            localStorage.setItem('floor', this.floor)

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
        getCrowdType() {
            if (!localStorage.getItem('crowd_type')) {
                localStorage.setItem('crowd_type', 'crowd_status_id')
                this.crowd_type = 'crowd_status_id'
            }
            else this.crowd_type = localStorage.getItem('crowd_type')

            this.getFloorNodes()
        },
        changeCrowdType() {
            if (localStorage.getItem('crowd_type') != this.crowd_type)
                localStorage.setItem('crowd_type', this.crowd_type)
            this.key++;

            this.getFloorNodes()
        }
    },
    mounted() {
        if (localStorage.getItem('floor')) this.floor = localStorage.getItem('floor');
        else this.floor = 'base';

        this.getCrowdType()
    }
}
</script>
