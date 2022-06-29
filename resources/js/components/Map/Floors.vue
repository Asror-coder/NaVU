<template>
    <div>
        <div :value="floor" :key="floor" v-for="floor in floors">
            <Base v-show="floor=='base'" :nodes="nodes" :showAllRoutes="showAllRoutes"/>
            <First v-show="floor=='1'" :nodes="nodes" :showAllRoutes="showAllRoutes"/>
            <Second v-show="floor=='2'" :nodes="nodes" :showAllRoutes="showAllRoutes"/>
            <Third v-show="floor=='3'" :nodes="nodes" :showAllRoutes="showAllRoutes"/>
        </div>
    </div>
</template>

<script>
import Base from './Floors/base_floor/Base.vue'
import First from './Floors/first_floor/First.vue'
import Second from './Floors/second_floor/Second.vue'
import Third from './Floors/third_floor/Third.vue'

export default {
    name: 'Floors',
    components: {
        Base,
        First,
        Second,
        Third
    },
    props: {
        nodes: null,
        showAllRoutes: null
    },
    data() {
        return {
            floors: []
        }
    },
    methods: {
        checkFloors() {
            this.floors = []

            for (var i=0; i < this.nodes.length; i++) {
                if (!this.floors.includes(this.nodes[i].floor)) {
                    this.floors.push(this.nodes[i].floor)
                }
            }
        }
    },
    watch: {
        nodes: {
            immediate: true,
            handler (newVal, oldVal) {
                this.checkFloors()
            }
        },
    },
}
</script>
