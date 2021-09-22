<template>
    <div class="p-4 shadow-md">
        <span class="text-center text-red-700" v-if="exception">{{exception}}</span>
        <form @submit.prevent="searchPath">
            <div class="flex flex-row">

                <div class="text-xl text-gray-700 mr-4 mt-2">Start</div>
                <select name="startId" v-model="form.startId" required
                    class="bg-gray-100 rounded focus:outline-none mr-2 shadow-md">
                    <option value="" disabled selected hidden>Nodes</option>
                    <option :value="node.id" :key="node.id" v-for="node in nodes">
                        {{ node.name }}
                    </option>
                </select>

                <div class="text-xl text-gray-700 mr-4 ml-8 mt-2">Destination</div>
                <select name="endId" v-model="form.endId" required
                    class="bg-gray-100 rounded focus:outline-none mr-2 shadow-md">
                    <option value="" disabled selected hidden>Nodes</option>
                    <option :value="node.id" :key="node.id" v-for="node in nodes">
                        {{ node.name }}
                    </option>
                </select>

                <div class="flex-grow"></div>

                <div class="flex-none">
                    <button class="bg-green-500 text-white rounded p-2 px-6 focus:outline-none hover:shadow-lg"
                        type="submit" >Search Path</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: 'SearchPathExample',
    props: {
        message: '',
        passedNodes: null
    },
    data() {
        return {
            form: {
                startId: null,
                endId: null
            },
            nodes: this.passedNodes,
            exception: this.message,
        }
    },
    methods: {
        async searchPath() {
            this.$emit('searchPath',this.form)
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
}
</script>
