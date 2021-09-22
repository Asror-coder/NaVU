<template>
    <div class="p-4 shadow-md">
        <span class="text-center text-red-700" v-if="exception">{{exception}}</span>
        <form @submit.prevent="addNode">
            <div class="flex flex-row">
                <div class="pr-3 flex-grow">
                    <label for="name" class="sr-only">Node name</label>
                    <input type="text" name="name" id="name" placeholder="Node name" v-model="form.name"
                        class="bg-gray-100 p-2 shadow-md rounded focus:outline-none w-full" required>
                </div>

                <div class="pr-3 flex-grow">
                    <label for="area" class="sr-only">Area</label>
                    <input type="number" name="area" id="area" placeholder="Area" v-model="form.area"
                        class="bg-gray-100 p-2 shadow-md rounded focus:outline-none w-full" required>
                </div>

                <div class="pr-3 flex-grow">
                    <select name="floor" v-model="form.floor" required
                        class="bg-gray-100 p-2 shadow-md rounded focus:outline-none w-full">
                        <option value="" disabled selected hidden>Floor</option>
                        <option value="base">Base</option>
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                        <option value="example">Example</option>
                    </select>
                </div>

                <div class="flex-none">
                    <button class="bg-green-500 text-white rounded p-2 px-6 focus:outline-none hover:shadow-lg"
                        type="submit" >Add node</button>
                </div>
            </div>
        </form>

        <span class="text-center text-gray-600 mt-2 text-sm">*Currently this and some other functions are disabled due to the end of developement period.</span>
    </div>
</template>

<script>
export default {
    name: 'AddNode',
    props: {
        message: ''
    },
    data() {
        return {
            form: {
                name: '',
                area: '',
                floor: ''
            },
            exception: this.message
        }
    },
    methods: {
        async addNode() {
            this.$emit('addNode',this.form)
        }
    },
    watch: {
        message: {
            immediate: true,
            handler (newVal, oldVal) {
                this.exception = newVal
            }
        },
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
