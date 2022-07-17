<template>
    <div class="flex bg-blue-50 shadow-md mt-4 rounded-md  py-2">
        <div class="text-lg mx-2">CO2</div>

        <div v-if="co2_level" class="flex-none mx-4">
            <div class="bg-safeWalk text-white px-1 rounded-sm"
                v-if="co2_level == 1">safe-to-walk</div>

            <div class="bg-semiSafeWalk text-white px-1 rounded-sm"
                v-else-if="co2_level == 2">semi-safe-to-walk</div>

            <div class="bg-safeStay text-white px-1 rounded-sm"
                v-else-if="co2_level == 3">safe-to-stay</div>

            <div class="bg-semiSafeStay text-white px-1 rounded-sm"
                v-else-if="co2_level == 4">semi-safe-to-stay</div>

            <div class="bg-notSafe text-white px-1 rounded-sm"
                v-else-if="co2_level == 5">not-safe</div>

            <div class="bg-crowded text-white px-1 rounded-sm"
                v-else-if="co2_level == 6">crowded</div>
        </div>

        <div class="">
            CO2 level (ppm): <span v-if="co2 && !showCO2Form">{{ co2 }}</span>
                    <span v-else-if="!co2" class="text-gray-400">null</span>
        </div>

        <form @submit.prevent="changeCO2" v-if="showCO2Form">
            <div class="flex flex-row">
                <div class="pr-3 flex-grow">
                    <label for="co2" class="sr-only">CO2 level (ppm)</label>
                    <input type="number" name="co2" id="co2" placeholder="co2" v-model="co2"
                        class="bg-gray-200 focus:outline-none ml-3 w-12 px-1" required>
                </div>

                <div class="flex-none">
                    <button class="bg-green-500 text-white rounded px-1 focus:outline-none hover:shadow-lg"
                        type="submit" >Change</button>
                </div>
            </div>
        </form>

        <button @click="toggleChangeCO2" v-if="!showCO2Form"
            class="text-blue-800 px-3 hover:text-blue-600 focus:outline-none mb-1"> Change </button>

        <button @click="toggleChangeCO2" v-if="showCO2Form"
             class="text-red-600 px-3 hover:text-blue-600 focus:outline-none mb-1"> Close </button>
    </div>
</template>

<script>
export default {
    name: 'NodeCO2',
    props: {
        node: null
    },
    data() {
        return {
            co2: '',
            co2_level: '',
            showCO2Form: false
        }
    },
    methods: {
        async changeCO2() {
            let new_co2 = {
                co2 : this.co2
            }

            await axios.put(`/api/node/setcotwo/${this.node.id}`, new_co2).then((response)=>{
                this.co2_level = response.data.co2_crowd_level
            })

            this.toggleChangeCO2()
        },
        toggleChangeCO2() {
            this.showCO2Form = !this.showCO2Form
        }
    },
    mounted() {
        this.co2_level = this.node.co2_crowd_level
        this.co2 = this.node.co2
    }
};
</script>

<style scoped>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
