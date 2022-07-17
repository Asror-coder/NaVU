<template>
    <div>
                                <!-- A block left side -->
        <!-- Front Elevator (3A-elevator)-->
        <div v-show="isInNodes('3A-elevator')">
            <Line :status="getStatus('3A-elevator')" :rotate="90" :height="60" :left="128" :top="203" :width="2"
                v-show="isInPath('3A-elevator','3A-LC-elevator')"/>
            <Line :status="getStatus('3A-elevator')" :rotate="90" :height="60" :left="186" :top="203" :width="2"
                v-show="isInPath('3A-elevator','3At-3A-elevator')"/>
        </div>

         <!-- 3A-LC-elevator -->
        <div v-show="isInNodes('3A-LC-elevator')">
            <Line :status="getStatus('3A-LC-elevator')" :rotate="0" :height="62" :left="26" :top="174" :width="2"
                v-show="isInPath('3A-LC-elevator','3A-LC-NU_03A23')"/>
            <Line :status="getStatus('3A-LC-elevator')" :rotate="90" :height="74" :left="59" :top="196" :width="2"
                v-show="isInPath('3A-LC-elevator','3A-elevator')"/>
            <Line :status="getStatus('3A-LC-elevator')" :rotate="0" :height="93" :left="26" :top="236" :width="2"
                v-show="isInPath('3A-LC-elevator','NU_03A01')"/>
        </div>

        <!-- NU_03A01 -->
        <div v-show="isInNodes('NU_03A01')">
            <Line :status="getStatus('NU_03A01')" :rotate="0" :height="70" :left="26" :top="332" :width="2"/>
            <Line :status="getStatus('NU_03A01')" :rotate="90" :height="36" :left="40" :top="380" :width="2"/>
        </div>

        <!-- NU_03A23 -->
        <div v-show="isInNodes('NU_03A23')">
            <Line :status="getStatus('NU_03A23')" :rotate="0" :height="40" :left="50" :top="109" :width="2"/>
        </div>

        <!-- NU_03A31 -->
        <div v-show="isInNodes('NU_03A31')">
            <Line :status="getStatus('NU_03A31')" :rotate="0" :height="43" :left="180" :top="109" :width="2"/>
        </div>

        <!-- 3A-LC-NU_02A23 -->
        <div v-show="isInNodes('3A-LC-NU_03A23')">
            <Line :status="getStatus('3A-LC-NU_03A23')" :rotate="0" :height="10" :left="26" :top="164" :width="2"
                v-show="isInPath('3A-LC-NU_03A23','3A-LC-elevator')"/>
            <Line :status="getStatus('3A-LC-NU_03A23')" :rotate="90" :height="32" :left="38" :top="148" :width="2"
                v-show="isInPath('3A-LC-NU_03A23','3A-LC-elevator')"/>

            <Line :status="getStatus('3A-LC-NU_03A23')" :rotate="0" :height="10" :left="50" :top="152" :width="2"
                v-show="isInPath('3A-LC-NU_03A23','NU_03A23')"/>

            <Line :status="getStatus('3A-LC-NU_03A23')" :rotate="90" :height="138" :left="115" :top="95" :width="2"
                v-show="isInPath('3A-LC-NU_03A23','NU_03A31')"/>
            <Line :status="getStatus('3A-LC-NU_03A23')" :rotate="0" :height="10" :left="180" :top="152" :width="2"
                v-show="isInPath('3A-LC-NU_03A23','NU_03A31')"/>
        </div>

                                <!-- A block right side -->
        <!-- NU_03A45 -->
        <div v-show="isInNodes('NU_03A45')">
            <Line :status="getStatus('NU_03A45')" :rotate="0" :height="70" :left="390" :top="163" :width="2"/>
        </div>

        <!-- NU_03A53 -->
        <div v-show="isInNodes('NU_03A53')">
            <Line :status="getStatus('NU_03A53')" :rotate="0" :height="70" :left="490" :top="163" :width="2"/>
        </div>

        <!-- NU_03A61 -->
        <div v-show="isInNodes('NU_03A61')">
            <Line :status="getStatus('NU_03A61')" :rotate="0" :height="40" :left="620" :top="105" :width="2"/>
        </div>

         <!-- 3A-RC-NU_03A61 -->
        <div v-show="isInNodes('3A-RC-NU_03A61')">
            <Line :status="getStatus('3A-RC-NU_03A61')" :rotate="90" :height="45" :left="597" :top="140.5" :width="2"
                v-show="isInPath('3A-RC-NU_03A61','3At-NU_03A61')"/>
            <Line :status="getStatus('3A-RC-NU_03A61')" :rotate="13" :height="30" :left="574.8" :top="160" :width="2"
                v-show="isInPath('3A-RC-NU_03A61','3At-NU_03A61')"/>
            <Line :status="getStatus('3A-RC-NU_03A61')" :rotate="0" :height="20" :left="620" :top="147" :width="2"
                v-show="isInPath('3A-RC-NU_03A61','NU_03A61')"/>
            <Line :status="getStatus('3A-RC-NU_03A61')" :rotate="90" :height="25" :left="629" :top="150.5" :width="2"
                v-show="isInPath('3A-RC-NU_03A61','3A-RC-NU_03A69')"/>
        </div>

        <!-- NU_03A69 -->
        <div v-show="isInNodes('NU_03A69')">
            <Line :status="getStatus('NU_03A69')" :rotate="0" :height="40" :left="720" :top="105" :width="2"/>
        </div>

        <!-- 3A-RC-NU_03A69 -->
        <div v-show="isInNodes('3A-RC-NU_03A69')">
            <Line :status="getStatus('3A-RC-NU_03A69')" :rotate="90" :height="40" :left="664" :top="143" :width="2"
                v-show="isInPath('3A-RC-NU_03A69','3A-RC-NU_03A61')"/>
            <Line :status="getStatus('3A-RC-NU_03A69')" :rotate="90" :height="48" :left="700" :top="139" :width="2"
                v-show="isInPath('3A-RC-NU_03A69','NU_03A69')"/>
            <Line :status="getStatus('3A-RC-NU_03A69')" :rotate="0" :height="20" :left="720" :top="147" :width="2"
                v-show="isInPath('3A-RC-NU_03A69','NU_03A69')"/>
            <Line :status="getStatus('3A-RC-NU_03A69')" :rotate="13" :height="10" :left="679" :top="165" :width="2"
                v-show="isInPath('3A-RC-NU_03A69','3A-CM')"/>
        </div>

        <!-- Coffee Machine (3A-CM) -->
        <div v-show="isInNodes('3A-CM')">
            <Line :status="getStatus('3A-CM')" :rotate="13" :height="34" :left="674" :top="174" :width="2"
                v-show="isInPath('3A-CM','3A-RC-NU_03A69')"/>
            <Line :status="getStatus('3A-CM')" :rotate="13" :height="120" :left="656.5" :top="206" :width="2"
                v-show="isInPath('3A-CM','3At-3A-CM')"/>
        </div>

                                <!-- B block -->
        <!-- NU_03B03 -->
        <div v-show="isInNodes('NU_03B03')">
            <Line :status="getStatus('NU_03B03')" :rotate="103" :height="60" :left="576" :top="354" :width="2"/>
        </div>

        <!-- NU_03B07 -->
        <div v-show="isInNodes('NU_03B07')">
            <Line :status="getStatus('NU_03B07')" :rotate="103" :height="60" :left="553" :top="456" :width="2"/>
        </div>

        <!-- NU_03B17 -->
        <div v-show="isInNodes('NU_03B17')">
            <Line :status="getStatus('NU_03B17')" :rotate="103" :height="60" :left="532" :top="547" :width="2"/>
        </div>

        <!-- NU_03B25 -->
        <div v-show="isInNodes('NU_03B25')">
            <Line :status="getStatus('NU_03B25')" :rotate="103" :height="40" :left="602" :top="636" :width="2"/>
        </div>

        <!-- 3B-C-NU_03B25 -->
        <div v-show="isInNodes('3B-C-NU_03B25')">
            <Line :status="getStatus('3B-C-NU_03B25')" :rotate="103" :height="16" :left="571" :top="641" :width="2"
                v-show="isInPath('3B-C-NU_03B25','NU_03B25')"/>
            <Line :status="getStatus('3B-C-NU_03B25')" :rotate="103" :height="92" :left="527" :top="592" :width="2"
                v-show="isInPath('3B-C-NU_03B25','3At-NU_03B25')"/>
            <Line :status="getStatus('3B-C-NU_03B25')" :rotate="13" :height="30" :left="564.5" :top="648" :width="2"
                v-show="isInPath('3B-C-NU_03B25','3B-C-elevator')"/>
        </div>

        <!-- NU_03B35 -->
        <div v-show="isInNodes('NU_03B35')">
            <Line :status="getStatus('NU_03B35')" :rotate="13" :height="50" :left="586" :top="792" :width="2"/>
        </div>

        <!-- Back Elevator (3B-elevator) -->
        <div v-show="isInNodes('3B-elevator')">
            <Line :status="getStatus('3B-elevator')" :rotate="103" :height="35" :left="502" :top="720" :width="2"/>
        </div>

        <!-- 3B-C-elevator-->
        <div v-show="isInNodes('3B-C-elevator')">
            <Line :status="getStatus('3B-C-elevator')" :rotate="13" :height="72" :left="552.5" :top="680" :width="2"
                v-show="isInPath('3B-C-elevator','3B-C-NU_03B25')"/>

            <Line :status="getStatus('3B-C-elevator')" :rotate="103" :height="26" :left="535.5" :top="732" :width="2"
                v-show="isInPath('3B-C-elevator','3B-elevator')"/>

            <Line :status="getStatus('3B-C-elevator')" :rotate="103" :height="63" :left="572" :top="722" :width="2"
                v-show="isInPath('3B-C-elevator','NU_03B35')"/>
            <Line :status="getStatus('3B-C-elevator')" :rotate="13" :height="34" :left="596" :top="755.5" :width="2"
                v-show="isInPath('3B-C-elevator','NU_03B35')"/>
        </div>

                                <!-- Atrium -->
        <!-- 3At-3A-elevator -->
        <div v-show="isInNodes('3At-3A-elevator')">
            <Line :status="getStatus('3At-3A-elevator')" :rotate="90" :height="24" :left="230" :top="221" :width="2"
                v-show="isInPath('3At-3A-elevator','3A-elevator')"/>
            <Line :status="getStatus('3At-3A-elevator')" :rotate="0" :height="24" :left="238" :top="234" :width="2"
                v-show="isInPath('3At-3A-elevator','3A-elevator')"/>
            <Line :status="getStatus('3At-3A-elevator')" :rotate="90" :height="100" :left="287" :top="204" :width="2"
                v-show="isInPath('3At-3A-elevator','3At-NU_03A45')"/>
            <Line :status="getStatus('3At-3A-elevator')" :rotate="0" :height="80" :left="238" :top="250" :width="2"
                v-show="isInPath('3At-3A-elevator','3At-NU_03A01')"/>
        </div>

        <!-- 3At-NU_03A45 -->
        <div v-show="isInNodes('3At-NU_03A45')">
            <Line :status="getStatus('3At-NU_03A45')" :rotate="90" :height="57" :left="365" :top="225.5" :width="2"
                v-show="isInPath('3At-NU_03A45','3At-3A-elevator')"/>
            <Line :status="getStatus('3At-NU_03A45')" :rotate="0" :height="23" :left="390" :top="235" :width="2"
                v-show="isInPath('3At-NU_03A45','NU_03A45')"/>
            <Line :status="getStatus('3At-NU_03A45')" :rotate="90" :height="50" :left="414" :top="229" :width="2"
                v-show="isInPath('3At-NU_03A45','3At-NU_03A53')"/>
        </div>

        <!-- 3At-NU_03A53 -->
        <div v-show="isInNodes('3At-NU_03A53')">
            <Line :status="getStatus('3At-NU_03A53')" :rotate="90" :height="57" :left="466" :top="225.5" :width="2"
                v-show="isInPath('3At-NU_03A53','3At-NU_03A45')"/>
            <Line :status="getStatus('3At-NU_03A53')" :rotate="0" :height="23" :left="490" :top="235" :width="2"
                v-show="isInPath('3At-NU_03A53','NU_03A53')"/>
            <Line :status="getStatus('3At-NU_03A53')" :rotate="90" :height="50" :left="518" :top="229" :width="2"
                v-show="isInPath('3At-NU_03A53','3At-NU_03A61')"/>
        </div>

        <!-- 3At-NU_03A61 -->
        <div v-show="isInNodes('3At-NU_03A61')">
            <Line :status="getStatus('3At-NU_03A61')" :rotate="90" :height="18" :left="551" :top="245" :width="2"
                v-show="isInPath('3At-NU_03A61','3At-NU_03A53')"/>
            <Line :status="getStatus('3At-NU_03A61')" :rotate="13" :height="70" :left="564" :top="186" :width="2"
                v-show="isInPath('3At-NU_03A61','3A-RC-NU_03A61')"/>
            <Line :status="getStatus('3At-NU_03A61')" :rotate="13" :height="42" :left="552" :top="254" :width="2"
                v-show="isInPath('3At-NU_03A61','3At-3A-CM')"/>
        </div>

        <!-- 3At-3A-CM -->
        <div v-show="isInNodes('3At-3A-CM')">
            <Line :status="getStatus('3At-3A-CM')" :rotate="103" :height="108" :left="595" :top="256" :width="2"
                v-show="isInPath('3At-3A-CM','3A-CM')"/>
            <Line :status="getStatus('3At-3A-CM')" :rotate="13" :height="26" :left="544" :top="295" :width="2"
                v-show="isInPath('3At-3A-CM','3At-NU_03B03')"/>
        </div>

        <!-- 3At-NU_03B03 -->
        <div v-show="isInNodes('3At-NU_03B03')">
            <Line :status="getStatus('3At-NU_03B03')" :rotate="13" :height="54" :left="535" :top="320" :width="2"
                v-show="isInPath('3At-NU_03B03','3At-3A-CM')"/>
            <Line :status="getStatus('3At-NU_03B03')" :rotate="103" :height="20" :left="535" :top="364" :width="2"
                v-show="isInPath('3At-NU_03B03','NU_03B03')"/>
            <Line :status="getStatus('3At-NU_03B03')" :rotate="13" :height="60" :left="522.5" :top="372" :width="2"
                v-show="isInPath('3At-NU_03B03','3At-NU_03B07')"/>
        </div>

        <!-- 3At-NU_03B07 -->
        <div v-show="isInNodes('3At-NU_03B07')">
            <Line :status="getStatus('3At-NU_03B07')" :rotate="13" :height="48" :left="510.5" :top="430" :width="2"
                v-show="isInPath('3At-NU_03B07','3At-NU_03B03')"/>
            <Line :status="getStatus('3At-NU_03B07')" :rotate="103" :height="20" :left="511" :top="466" :width="2"
                v-show="isInPath('3At-NU_03B07','NU_03B07')"/>
            <Line :status="getStatus('3At-NU_03B07')" :rotate="13" :height="50" :left="501" :top="472" :width="2"
                v-show="isInPath('3At-NU_03B07','3At-NU_03B17')"/>
        </div>

        <!-- 3At-NU_03B17 -->
        <div v-show="isInNodes('3At-NU_03B17')">
            <Line :status="getStatus('3At-NU_03B17')" :rotate="13" :height="50" :left="490" :top="518" :width="2"
                v-show="isInPath('3At-NU_03B17','3At-NU_03B07')"/>
            <Line :status="getStatus('3At-NU_03B17')" :rotate="103" :height="20" :left="490" :top="557" :width="2"
                v-show="isInPath('3At-NU_03B17','NU_03B17')"/>
            <Line :status="getStatus('3At-NU_03B17')" :rotate="13" :height="57" :left="478" :top="566" :width="2"
                v-show="isInPath('3At-NU_03B17','3At-NU_03B25')"/>
        </div>

        <!-- 3At-NU_03B25 -->
        <div v-show="isInNodes('3At-NU_03B25')">
            <Line :status="getStatus('3At-NU_03B25')" :rotate="103" :height="20" :left="477" :top="616.5" :width="2"
                v-show="isInPath('3At-NU_03B25','3B-C-NU_03B25')"/>
            <Line :status="getStatus('3At-NU_03B25')" :rotate="13" :height="95" :left="461" :top="620" :width="2"
                v-show="isInPath('3At-NU_03B25','3At-C-3')"/>
            <Line :status="getStatus('3At-NU_03B25')" :rotate="90" :height="56" :left="426" :top="683" :width="2"
                v-show="isInPath('3At-NU_03B25','3At-C-3')"/>
        </div>

        <!-- 3At-C-3 -->
        <div v-show="isInNodes('3At-C-3')">
            <Line :status="getStatus('3At-C-3')" :rotate="90" :height="140" :left="329" :top="641" :width="2"/>
        </div>

        <!-- 3At-C-2 -->
        <div v-show="isInNodes('3At-C-2')">
            <Line :status="getStatus('3At-C-2')" :rotate="0" :height="134" :left="238" :top="580" :width="2"/>
            <Line :status="getStatus('3At-C-2')" :rotate="90" :height="24" :left="247" :top="698" :width="2"/>
        </div>

        <!-- 3At-C-1 -->
        <div v-show="isInNodes('3At-C-1')">
            <Line :status="getStatus('3At-C-1')" :rotate="0" :height="134" :left="238" :top="460" :width="2"/>
        </div>

        <!-- 3At-NU_03A01 -->
        <div v-show="isInNodes('3At-NU_03A01')">
            <Line :status="getStatus('3At-NU_03A01')" :rotate="0" :height="134" :left="238" :top="326" :width="2"/>
        </div>

    </div>
</template>

<script>
import Line from '../components/line.vue'

export default {
    name: 'ThirdRoutes',
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
                    switch (localStorage.getItem('crowd_type')) {
                        case 'simulation_1':
                            return this.nodes[i].simulation_1;
                        case 'simulation_2':
                            return this.nodes[i].simulation_2;
                        case 'simulation_3':
                            return this.nodes[i].simulation_3;
                        case 'co2_crowd_level':
                            return this.nodes[i].co2_crowd_level;
                        default:
                            return this.nodes[i].crowd_status_id;
                    }
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
