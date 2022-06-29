<template>
    <div>
        <div class="relative" style="height: 900px;">
            <img :src="'./images/example.jpg'" class="absolute">

            <!-- node 1 -->
            <Line :status="getStatus(1)" :rotate="0" :height="70" :left="235" :top="78" :width="2"
                v-show="isInNodes(1) && isInPath(1,3)"/>

            <!-- node 2 -->
            <Line :status="getStatus(2)" :rotate="90" :height="70" :left="128" :top="185" :width="2"
                v-show="isInNodes(2) && isInPath(2,3)"/>

            <!-- node 3 -->
            <div v-show="isInNodes(3)">
                <Line :status="getStatus(3)" :rotate="90" :height="70" :left="198" :top="185" :width="2"
                    v-show="isInPath(3,2)"/>
                <Line :status="getStatus(3)" :rotate="90" :height="70" :left="268" :top="185" :width="2"
                    v-show="isInPath(3,4)"/>
                <Line :status="getStatus(3)" :rotate="0" :height="70" :left="235" :top="148" :width="2"
                    v-show="isInPath(3,1)"/>
                <Line :status="getStatus(3)" :rotate="0" :height="70" :left="235" :top="218" :width="2"
                    v-show="isInPath(3,6)"/>
            </div>

            <!-- node 4 -->
            <div v-show="isInNodes(4)">
                <Line :status="getStatus(4)" :rotate="90" :height="70" :left="338" :top="185" :width="2"
                    v-show="isInPath(4,3)"/>
                <Line :status="getStatus(4)" :rotate="90" :height="70" :left="408" :top="185" :width="2"
                    v-show="isInPath(4,5)"/>
            </div>

            <!-- node 5 -->
            <div v-show="isInNodes(5)">
                <Line :status="getStatus(5)" :rotate="90" :height="70" :left="478" :top="185" :width="2"
                    v-show="isInPath(5,4)"/>
                <Line :status="getStatus(5)" :rotate="0" :height="70" :left="513" :top="216" :width="2"
                    v-show="isInPath(5,7)"/>
            </div>

            <!-- node 6 -->
            <div v-show="isInNodes(6)">
                <Line :status="getStatus(6)" :rotate="0" :height="70" :left="235" :top="288" :width="2"
                    v-show="isInPath(6,3)"/>
                <Line :status="getStatus(6)" :rotate="0" :height="67" :left="235" :top="358" :width="2"
                    v-show="isInPath(6,9)"/>
            </div>

            <!-- node 7 -->
            <div v-show="isInNodes(7)">
                <Line :status="getStatus(7)" :rotate="90" :height="70" :left="544" :top="321" :width="2"
                    v-show="isInPath(7,8)"/>
                <Line :status="getStatus(7)" :rotate="0" :height="70" :left="513" :top="286" :width="2"
                    v-show="isInPath(7,5)"/>
                <Line :status="getStatus(7)" :rotate="0" :height="69" :left="513" :top="356" :width="2"
                    v-show="isInPath(7,10)"/>
            </div>

            <!-- node 8 -->
            <div v-show="isInNodes(8)">
                <Line :status="getStatus(8)" :rotate="90" :height="70" :left="614" :top="321" :width="2"
                    v-show="isInPath(8,7)"/>
            </div>

            <!-- node 9 -->
            <div v-show="isInNodes(9)">
                <Line :status="getStatus(9)" :rotate="0" :height="70" :left="235" :top="425" :width="2"
                    v-show="isInPath(9,6)"/>
                <Line :status="getStatus(9)" :rotate="0" :height="70" :left="235" :top="495" :width="2"
                    v-show="isInPath(9,11)"/>
            </div>

            <!-- node 10 -->
            <div v-show="isInNodes(10)">
                <Line :status="getStatus(10)" :rotate="0" :height="70" :left="513" :top="425" :width="2"
                    v-show="isInPath(10,7)"/>
                <Line :status="getStatus(10)" :rotate="0" :height="70" :left="513" :top="495" :width="2"
                    v-show="isInPath(10,13)"/>
            </div>

            <!-- node 11 -->
            <div v-show="isInNodes(11)">
                <Line :status="getStatus(11)" :rotate="0" :height="70" :left="235" :top="565" :width="2"
                    v-show="isInPath(11,9)"/>
                <Line :status="getStatus(11)" :rotate="90" :height="70" :left="267" :top="600" :width="2"
                    v-show="isInPath(11,12)"/>
            </div>

            <!-- node 12 -->
            <div v-show="isInNodes(12)">
                <Line :status="getStatus(12)" :rotate="90" :height="70" :left="337" :top="600" :width="2"
                    v-show="isInPath(12,11)"/>
                <Line :status="getStatus(12)" :rotate="90" :height="70" :left="407" :top="600" :width="2"
                    v-show="isInPath(12,13)"/>
            </div>

            <!-- node 13 -->
            <div v-show="isInNodes(13)">
                <Line :status="getStatus(13)" :rotate="90" :height="70" :left="477" :top="600" :width="2"
                    v-show="isInPath(13,12)"/>
                <Line :status="getStatus(13)" :rotate="0" :height="70" :left="513" :top="565" :width="2"
                    v-show="isInPath(13,10)"/>
                <Line :status="getStatus(13)" :rotate="0" :height="70" :left="513" :top="635" :width="2"
                    v-show="isInPath(13,14)"/>
            </div>

            <!-- node 14 -->
            <div v-show="isInNodes(14)">
                <Line :status="getStatus(14)" :rotate="0" :height="70" :left="513" :top="705" :width="2" />
            </div>
        </div>
    </div>
</template>

<script>
import Line from '../Map/Floors/components/line.vue'

export default {
    name: 'ExampleLayout',
    components: {
        Line
    },
    props: {
        nodes: null
    },
    methods: {
        getStatus(nodeName) {
            for (var i=0; i < this.nodes.length; i++) {
                if (this.nodes[i].name == nodeName) {
                    return this.nodes[i].crowd_status_id;
                }
            }
        },
        isInNodes(nodeName) {
            for (var i=0; i < this.nodes.length; i++) {
                if (this.nodes[i].name == nodeName) return true;
            }
            return false;
        },
        isInPath (node1,node2) {
            for (var i=0; i < this.nodes.length; i++) {
                if (this.nodes[i].name == node1) {
                    for (var j=0; j < this.nodes.length; j++) {
                        if (this.nodes[j].name == node2) return true;
                    }
                }
            }
            return false;
        }
    }
}
</script>
