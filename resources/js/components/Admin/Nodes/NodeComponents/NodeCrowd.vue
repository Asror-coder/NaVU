<template>
    <div class="flex mt-2">
        <div class="flex justify-center mr-4">
            <label class="mr-4 text-gray-700">Simulation 1: </label>
            <form v-if="simulation_1" @change="changeCrowdType(1)">
                <select name="simulation_1" v-model="simulation_1" required
                    class="bg-gray-100 p-1 shadow-lg rounded focus:outline-none w-full">
                    <option value="" disabled selected hidden>Crowd</option>
                    <option value="1">safe-to-walk</option>
                    <option value="2">semi-safe-to-walk</option>
                    <option value="3">safe-to-stay</option>
                    <option value="4">semi-safe-to-stay</option>
                    <option value="5">not-safe</option>
                    <option value="6">crowded</option>
                </select>
            </form>
        </div>

        <div class="flex justify-center">
            <label class="mr-4 text-gray-700">Simulation 2: </label>
            <form v-if="simulation_2" @change="changeCrowdType(2)">
                <select name="simulation_2" v-model="simulation_2" required
                    class="bg-gray-100 p-1 shadow-lg rounded focus:outline-none w-full">
                    <option value="" disabled selected hidden>Crowd</option>
                    <option value="1">safe-to-walk</option>
                    <option value="2">semi-safe-to-walk</option>
                    <option value="3">safe-to-stay</option>
                    <option value="4">semi-safe-to-stay</option>
                    <option value="5">not-safe</option>
                    <option value="6">crowded</option>
                </select>
            </form>
        </div>
    </div>
</template>

<script>

export default {
    name: 'NodeCrowd',
    props: {
        node: null
    },
    data() {
        return {
            simulation_1: '',
            simulation_2: ''
        }
    },
    methods: {
        async changeCrowdType(sim) {
            let request = {}
            if (sim == 1)
                request = {
                    type: sim,
                    crowd_status: this.simulation_1
                }
            else if (sim == 2)
                request = {
                    type: sim,
                    crowd_status: this.simulation_2
                }

            await axios.put(`/api/node/simulation/${this.node.id}`, request)
        }
    },
    mounted() {
        this.simulation_1 = this.node.simulation_1
        this.simulation_2 = this.node.simulation_2
    }
};
</script>
