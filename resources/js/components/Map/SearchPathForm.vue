<template>
    <div class="p-4 shadow-md">
        <span class="text-center text-red-700" v-if="exception">{{exception}}</span>
        <div class="flex flex-row">
            <div class="flex flex-col bg-blue-100 w-1/3 rounded-md shadow-md">
                <div class="text-xl text-gray-700 text-center">Start</div>
                <SearchFormComponent :passedFloor="passedFloor" @newNode="setStartId"/>
            </div>

            <div class="flex flex-col bg-blue-100 w-1/3 rounded-md shadow-md ml-4">
                <div class="text-xl text-gray-700 text-center">Destination</div>
                <SearchFormComponent :passedFloor="passedFloor" @newNode="setEndId"/>
            </div>

            <div class="flex-none flex justify-center w-1/3 ml-4">
                <button class="bg-green-500 mt-10 h-1/3 text-white rounded p-2 px-6 focus:outline-none hover:shadow-lg"
                    @click="searchPath" >Search Path</button>
            </div>
        </div>
    </div>
</template>

<script>
import SearchFormComponent from './Floors/components/SearchFormComponent.vue'

export default {
    name: 'SearchPathForm',
    emits: ["searchPath"],
    components: {
        SearchFormComponent
    },
    props: {
        message: '',
        passedFloor: ''
    },
    data() {
        return {
            form: {
                startId: null,
                endId: null
            },
            exception: this.message,
        }
    },
    methods: {
        setStartId(nodeId) {
            this.form.startId = nodeId
        },
        setEndId(nodeId) {
            this.form.endId = nodeId
        },
        async searchPath() {
            this.exception = ''

            if(!this.form.startId) this.exception = 'Please choose your starting location!'
            else if(!this.form.endId) this.exception = 'Please choose your destination!'
            else if(this.form.startId == this.form.endId) this.exception = 'You are already at your destination!'
            else this.$emit('searchPath',this.form)
        },
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
