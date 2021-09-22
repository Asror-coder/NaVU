<template>
    <div>
        <!-- Front Entrance -->
        <div v-show="isInNodes('front-entrance')">
            <Line :status="getStatus('front-entrance')" :rotate="0" :height="35" :left="276" :top="95" :width="2"
                    v-show="isInPath('front-entrance','atrium-front-elevator')"/>
        </div>

        <!-- Front Elevator -->
        <div v-show="isInNodes('front-elevator')">
            <Line :status="getStatus('front-elevator')" :rotate="90" :height="56" :left="188" :top="205" :width="2"/>
        </div>

        <!-- Atrium Front Elevator -->
        <div v-show="isInNodes('atrium-front-elevator')">
            <Line :status="getStatus('atrium-front-elevator')" :rotate="0" :height="105" :left="276" :top="132" :width="2"
                v-show="isInPath('atrium-front-elevator','front-entrance')"/>
            <Line :status="getStatus('atrium-front-elevator')" :rotate="0" :height="135" :left="276" :top="229" :width="2"
                v-show="isInPath('atrium-front-elevator','atrium-center')"/>
            <Line :status="getStatus('atrium-front-elevator')" :rotate="90" :height="56" :left="246" :top="205" :width="2"
                v-show="isInPath('atrium-front-elevator','front-elevator')"/>
            <Line :status="getStatus('atrium-front-elevator')" :rotate="118" :height="60" :left="300" :top="217" :width="2"
                v-show="isInPath('atrium-front-elevator','atrium-cafe')"/>
        </div>

        <!-- Atrium Cafe -->
        <div v-show="isInNodes('atrium-cafe')">
            <Line :status="getStatus('atrium-cafe')" :rotate="95" :height="105" :left="376" :top="212" :width="2"
                v-show="isInPath('atrium-cafe','atrium-front-elevator')"/>
            <Line :status="getStatus('atrium-cafe')" :rotate="-15" :height="100" :left="438" :top="264" :width="2"
                v-show="isInPath('atrium-cafe','atrium-staircases')"/>
        </div>

        <!-- Atrium Staircases -->
        <div v-show="isInNodes('atrium-staircases')">
            <Line :status="getStatus('atrium-staircases')" :rotate="-17" :height="58" :left="459" :top="360" :width="2"
                v-show="isInPath('atrium-staircases','atrium-cafe')"/>
            <Line :status="getStatus('atrium-staircases')" :rotate="35" :height="70" :left="489" :top="352" :width="2"
                v-show="isInPath('atrium-staircases','1A-AS')"/>
            <Line :status="getStatus('atrium-staircases')" :rotate="-6" :height="88" :left="472" :top="412" :width="2"
                v-show="isInPath('atrium-staircases','1B-C-NU_01B13')"/>
            <Line :status="getStatus('atrium-staircases')" :rotate="22" :height="140" :left="442" :top="410" :width="2"
                v-show="isInPath('atrium-staircases','atrium-grand-cafe')"/>
        </div>

        <!-- Atrium Center -->
        <div v-show="isInNodes('atrium-center')">
            <Line :status="getStatus('atrium-center')" :rotate="0" :height="100" :left="276" :top="364" :width="2"
                v-show="isInPath('atrium-center','atrium-front-elevator')"/>
            <Line :status="getStatus('atrium-center')" :rotate="-18" :height="100" :left="291" :top="461" :width="2"
                v-show="isInPath('atrium-center','atrium-grand-cafe')"/>
        </div>

        <!-- Atrium Grand Cafe -->
        <div v-show="isInNodes('atrium-grand-cafe')">
            <Line :status="getStatus('atrium-grand-cafe')" :rotate="-55" :height="100" :left="345" :top="535" :width="2"
                v-show="isInPath('atrium-grand-cafe','atrium-center')"/>
            <Line :status="getStatus('atrium-grand-cafe')" :rotate="23" :height="80" :left="400" :top="540" :width="2"
                v-show="isInPath('atrium-grand-cafe','atrium-staircases')"/>
            <Line :status="getStatus('atrium-grand-cafe')" :rotate="103" :height="100" :left="430" :top="572" :width="2"
                v-show="isInPath('atrium-grand-cafe','grand-cafe')"/>
            <Line :status="getStatus('atrium-grand-cafe')" :rotate="-5" :height="105" :left="390" :top="612" :width="2"
                v-show="isInPath('atrium-grand-cafe','atrium-back-elevator')"/>
        </div>

        <!-- Atrium Back Elevator -->
        <div v-show="isInNodes('atrium-back-elevator')">
            <Line :status="getStatus('atrium-back-elevator')" :rotate="103" :height="67" :left="424" :top="686" :width="2"
                v-show="isInPath('atrium-back-elevator','back-elevator')"/>
            <Line :status="getStatus('atrium-back-elevator')" :rotate="10" :height="150" :left="382" :top="710" :width="2"
                v-show="isInPath('atrium-back-elevator','back-entrance')"/>
        </div>

        <!-- Grand Cafe -->
        <div v-show="isInNodes('grand-cafe')">
            <Line :status="getStatus('grand-cafe')" :rotate="103" :height="100" :left="530" :top="596" :width="2"
                v-show="isInPath('grand-cafe','atrium-grand-cafe')"/>
        </div>

        <!-- Back Elevator -->
        <div v-show="isInNodes('back-elevator')">
            <Line :status="getStatus('back-elevator')" :rotate="103" :height="35" :left="476" :top="715" :width="2"/>
        </div>

        <!-- Back Entrance -->
        <div v-show="isInNodes('back-entrance')">
            <Line :status="getStatus('back-entrance')" :rotate="0" :height="35" :left="369" :top="861" :width="2"
                v-show="isInPath('back-entrance','atrium-back-elevator')"/>
        </div>

    </div>
</template>

<script>
import Line from '../components/line.vue'

export default {
    name: 'BaseRoutes',
    components: {
        Line
    },
    props: {
        nodes: null,
        showAllRoutes: null
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
            if (this.showAllRoutes) return true

            for (var i=0; i < this.nodes.length; i++) {
                if (this.nodes[i].name == node1) {
                    for (var j=0; j < this.nodes.length; j++) {
                        if (this.nodes[j].name == node2) return true;
                    }
                }
                    // if ((i+1 != this.nodes.length && this.nodes[i+1].name == node2) ||
                    //     (i-1 >= 0 && this.nodes[i-1].name == node2)) return true;
            }
            return false;
        }
    }
}
</script>
