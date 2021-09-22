<template>
    <div>
                                <!-- A block left side -->
        <!-- Front Elevator (1A-elevator)-->
        <div v-show="isInNodes('1A-elevator')">
            <Line :status="getStatus('1A-elevator')" :rotate="90" :height="56" :left="126" :top="205" :width="2"
                v-show="isInPath('1A-elevator','1A-LC')"/>
        </div>

        <!-- A block left corridor (1A-LC) -->
        <div v-show="isInNodes('1A-LC')">
            <Line :status="getStatus('1A-LC')" :rotate="90" :height="74" :left="59" :top="196" :width="2"
                v-show="isInPath('1A-LC','1A-elevator')"/>
            <Line :status="getStatus('1A-LC')" :rotate="0" :height="76" :left="25" :top="161" :width="2"
                v-show="isInPath('1A-LC','1A-elevator')"/>
            <Line :status="getStatus('1A-LC')" :rotate="90" :height="195" :left="118.5" :top="64" :width="2"
                v-show="isInPath('1A-LC','1A-Bridge')"/>
            <Line :status="getStatus('1A-LC')" :rotate="0" :height="10" :left="25" :top="152" :width="2"
            v-show="isInPath('1A-LC','NU_01A23')"/>
        </div>

        <!-- NU_01A23 -->
        <div v-show="isInNodes('NU_01A23')">
            <Line :status="getStatus('NU_01A23')" :rotate="0" :height="40" :left="25" :top="109" :width="2"/>
            <Line :status="getStatus('NU_01A23')" :rotate="90" :height="50" :left="50" :top="88" :width="2"/>
        </div>

        <!-- 1A-Bridge -->
        <div v-show="isInNodes('1A-Bridge')">
            <Line :status="getStatus('1A-Bridge')" :rotate="90" :height="118" :left="277" :top="103" :width="2"/>
        </div>

                                <!-- A block right side -->
        <!-- A block right side corridor to bridge (1A-RC-Bridge) -->
        <div v-show="isInNodes('1A-RC-Bridge')">
            <Line :status="getStatus('1A-RC-Bridge')" :rotate="90" :height="26" :left="351" :top="150" :width="2"
                v-show="isInPath('1A-RC-Bridge','1A-Bridge')"/>
            <Line :status="getStatus('1A-RC-Bridge')" :rotate="90" :height="60" :left="386" :top="133" :width="2"
                v-show="isInPath('1A-RC-Bridge','1A-RC-NU_01A45')"/>
            <Line :status="getStatus('1A-RC-Bridge')" :rotate="0" :height="50" :left="360" :top="167" :width="2"
                v-show="isInPath('1A-RC-Bridge','1A-CA')"/>
        </div>

        <!-- A block right corridor near room NU_01A45 (1A-RC-NU_01A45) -->
        <div v-show="isInNodes('1A-RC-NU_01A45')">
            <Line :status="getStatus('1A-RC-NU_01A45')" :rotate="90" :height="60" :left="445" :top="133" :width="2"
                v-show="isInPath('1A-RC-NU_01A45','1A-RC-Bridge')"/>
            <Line :status="getStatus('1A-RC-NU_01A45')" :rotate="0" :height="15" :left="471" :top="147" :width="2"
                v-show="isInPath('1A-RC-NU_01A45','NU_01A45')"/>
            <Line :status="getStatus('1A-RC-NU_01A45')" :rotate="90" :height="42" :left="488" :top="142" :width="2"
                v-show="isInPath('1A-RC-NU_01A45','1A-RC-NU_01A55')"/>
        </div>

        <!-- NU_01A45 -->
        <div v-show="isInNodes('NU_01A45')">
            <Line :status="getStatus('NU_01A45')" :rotate="0" :height="35" :left="471" :top="110" :width="2"/>
        </div>

        <!-- 1A-RC-NU_01A55 -->
        <div v-show="isInNodes('1A-RC-NU_01A55')">
            <Line :status="getStatus('1A-RC-NU_01A55')" :rotate="90" :height="54" :left="536" :top="136" :width="2"
                v-show="isInPath('1A-RC-NU_01A55','1A-RC-NU_01A45')"/>
            <Line :status="getStatus('1A-RC-NU_01A55')" :rotate="0" :height="19" :left="560" :top="147" :width="2"
                v-show="isInPath('1A-RC-NU_01A55','NU_01A55')"/>
            <Line :status="getStatus('1A-RC-NU_01A55')" :rotate="194" :height="91" :left="549" :top="163" :width="2"
                v-show="isInPath('1A-RC-NU_01A55','1A-AS')"/>
            <Line :status="getStatus('1A-RC-NU_01A55')" :rotate="90" :height="50" :left="583" :top="138" :width="2"
                v-show="isInPath('1A-RC-NU_01A55','1A-RC-NU_01A65')"/>
        </div>

        <!-- NU_01A55 -->
        <div v-show="isInNodes('NU_01A55')">
            <Line :status="getStatus('NU_01A55')" :rotate="0" :height="35" :left="560" :top="110" :width="2"/>
        </div>

        <!-- 1A-RC-NU_01A65 -->
        <div v-show="isInNodes('1A-RC-NU_01A65')">
            <Line :status="getStatus('1A-RC-NU_01A65')" :rotate="90" :height="48" :left="630" :top="139" :width="2"
                v-show="isInPath('1A-RC-NU_01A65','1A-RC-NU_01A55')"/>
            <Line :status="getStatus('1A-RC-NU_01A65')" :rotate="0" :height="20" :left="650" :top="147" :width="2"
                v-show="isInPath('1A-RC-NU_01A65','NU_01A65')"/>
            <Line :status="getStatus('1A-RC-NU_01A65')" :rotate="90" :height="30" :left="669" :top="148" :width="2"
                v-show="isInPath('1A-RC-NU_01A65','1A-CM')"/>
        </div>

        <!-- NU_01A65 -->
        <div v-show="isInNodes('NU_01A65')">
            <Line :status="getStatus('NU_01A65')" :rotate="0" :height="35" :left="650" :top="110" :width="2"/>
        </div>

        <!-- Coffee Machine (1A-CM) -->
        <div v-show="isInNodes('1A-CM')">
            <Line :status="getStatus('1A-CM')" :rotate="0" :height="44" :left="680" :top="165" :width="2"
                v-show="isInPath('1A-CM','1A-RC-NU_01A65')"/>
            <Line :status="getStatus('1A-CM')" :rotate="25" :height="70" :left="666" :top="204" :width="2"
                v-show="isInPath('1A-CM','1A-RC-1B')"/>
        </div>

        <!-- Common Area (1A-CA) -->
        <div v-show="isInNodes('1A-CA')">
            <Line :status="getStatus('1A-CA')" :rotate="0" :height="50" :left="360" :top="214" :width="2"
                v-show="isInPath('1A-CA','1A-RC-Bridge')"/>
            <Line :status="getStatus('1A-CA')" :rotate="100" :height="98" :left="410" :top="220" :width="2"
                v-show="isInPath('1A-CA','1A-AS')"/>
        </div>

        <!-- Atrium Staircase to A block (1A-AS) -->
        <div v-show="isInNodes('1A-AS')">
            <Line :status="getStatus('1A-AS')" :rotate="197" :height="40" :left="521" :top="284" :width="2"
                v-show="isInPath('1A-AS','atrium-staircases')"/>
            <Line :status="getStatus('1A-AS')" :rotate="100" :height="70" :left="492" :top="248" :width="2"
                v-show="isInPath('1A-AS','1A-CA')"/>
            <Line :status="getStatus('1A-AS')" :rotate="198" :height="42" :left="531" :top="252" :width="2"
                v-show="isInPath('1A-AS','1A-RC-NU_01A55')"/>
            <Line :status="getStatus('1A-AS')" :rotate="140" :height="34" :left="535" :top="283" :width="2"
                v-show="isInPath('1A-AS','1A-RC-1B')"/>
        </div>

        <!-- Corridor to B block and Coffee Machine (1A-RC-1B) -->
        <div v-show="isInNodes('1A-RC-1B')">
            <Line :status="getStatus('1A-RC-1B')" :rotate="103" :height="95" :left="591" :top="275" :width="2"
                v-show="isInPath('1A-RC-1B','1A-CM')"/>
            <Line :status="getStatus('1A-RC-1B')" :rotate="196" :height="61" :left="643" :top="269" :width="2"
                v-show="isInPath('1A-RC-1B','1A-CM')"/>
            <Line :status="getStatus('1A-RC-1B')" :rotate="193" :height="30" :left="545" :top="310" :width="2"
                v-show="isInPath('1A-RC-1B','1B-C-NU_01B03')"/>
        </div>

                                <!-- B block -->

        <!--B block Corridor near room NU_01B03 (1B-C-NU_01B03) -->
        <div v-show="isInNodes('1B-C-NU_01B03')">
            <Line :status="getStatus('1B-C-NU_01B03')" :rotate="193" :height="67" :left="534" :top="339" :width="2"
                v-show="isInPath('1B-C-NU_01B03','1A-RC-1B')"/>
            <Line :status="getStatus('1B-C-NU_01B03')" :rotate="103" :height="16" :left="532" :top="395" :width="2"
                v-show="isInPath('1B-C-NU_01B03','NU_01B03')"/>
            <Line :status="getStatus('1B-C-NU_01B03')" :rotate="193" :height="41" :left="523" :top="398" :width="2"
                v-show="isInPath('1B-C-NU_01B03','1B-C-NU_01B11')"/>
        </div>

        <!-- 1B-NU_01B03 -->
        <div v-show="isInNodes('NU_01B03')">
            <Line :status="getStatus('NU_01B03')" :rotate="103" :height="40" :left="561" :top="390" :width="2"/>
        </div>

        <!--1B-C-NU_01B11-->
        <div v-show="isInNodes('1B-C-NU_01B11')">
            <Line :status="getStatus('1B-C-NU_01B11')" :rotate="193" :height="40" :left="514" :top="437" :width="2"
                v-show="isInPath('1B-C-NU_01B11','1B-C-NU_01B11')"/>
            <Line :status="getStatus('1B-C-NU_01B11')" :rotate="103" :height="16" :left="515" :top="467" :width="2"
                v-show="isInPath('1B-C-NU_01B11','NU_01B11')"/>
            <Line :status="getStatus('1B-C-NU_01B11')" :rotate="193" :height="62" :left="504" :top="469" :width="2"
                v-show="isInPath('1B-C-NU_01B11','1B-C-NU_01B13')"/>
        </div>

        <!-- 1B-NU_01B11 -->
        <div v-show="isInNodes('NU_01B11')">
            <Line :status="getStatus('NU_01B11')" :rotate="103" :height="40" :left="545" :top="462" :width="2"/>
        </div>

        <!--1B-C-NU_01B13-->
        <div v-show="isInNodes('1B-C-NU_01B13')">
            <Line :status="getStatus('1B-C-NU_01B13')" :rotate="193" :height="48" :left="492" :top="528" :width="2"
                v-show="isInPath('1B-C-NU_01B13','1B-C-NU_01B11')"/>
            <Line :status="getStatus('1B-C-NU_01B13')" :rotate="103" :height="16" :left="493" :top="565" :width="2"
                v-show="isInPath('1B-C-NU_01B13','NU_01B13')"/>
            <Line :status="getStatus('1B-C-NU_01B13')" :rotate="103" :height="16" :left="478" :top="562" :width="2"
                v-show="isInPath('1B-C-NU_01B13','atrium-staircases') || isInPath('1B-C-NU_01B13','2At-Staircase')"/>
            <Line :status="getStatus('1B-C-NU_01B13')" :rotate="193" :height="60" :left="481" :top="568" :width="2"
                v-show="isInPath('1B-C-NU_01B13','NU_01B23')"/>
            <Line :status="getStatus('1B-C-NU_01B13')" :rotate="103" :height="16" :left="480" :top="618" :width="2"
                v-show="isInPath('1B-C-NU_01B13','NU_01B23')"/>
        </div>

        <!-- NU_01B13 -->
        <div v-show="isInNodes('NU_01B13')">
            <Line :status="getStatus('NU_01B13')" :rotate="103" :height="40" :left="522" :top="560" :width="2"/>
        </div>

        <!-- NU_01B23 -->
        <div v-show="isInNodes('NU_01B23')">
            <Line :status="getStatus('NU_01B23')" :rotate="103" :height="60" :left="519" :top="605" :width="2"
                v-show="isInPath('NU_01B23','1B-C-NU_01B13')"/>
            <Line :status="getStatus('NU_01B23')" :rotate="103" :height="50" :left="572" :top="622" :width="2"
                v-show="isInPath('NU_01B23','NU_01B29')"/>
            <Line :status="getStatus('NU_01B23')" :rotate="193" :height="20" :left="590" :top="650" :width="2"
                v-show="isInPath('NU_01B23','NU_01B29')"/>
        </div>

        <!-- NU_01B29 -->
        <div v-show="isInNodes('NU_01B29')">
            <Line :status="getStatus('NU_01B29')" :rotate="193" :height="80" :left="578" :top="671" :width="2"
                v-show="isInPath('NU_01B29','NU_01B23')"/>
            <Line :status="getStatus('NU_01B29')" :rotate="103" :height="52" :left="547" :top="723" :width="2"
                v-show="isInPath('NU_01B29','1B-elevator')"/>
        </div>
        <!-- Back Elevator (1B-elevator) -->
        <div v-show="isInNodes('1B-elevator')">
            <Line :status="getStatus('1B-elevator')" :rotate="103" :height="35" :left="502" :top="720" :width="2"
                v-show="isInPath('1B-elevator','NU_01B29')"/>
        </div>
    </div>
</template>

<script>
import Line from '../components/line.vue'

export default {
    name: 'FirstRoutes',
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
