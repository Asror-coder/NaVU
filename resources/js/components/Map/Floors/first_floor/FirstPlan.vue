<template>
    <div>
        <BaseFirstCommonVue />

        <!-- Common areas -->
        <div class="absolute text-sm font-semibold text-blue-700 shadow-sm" style="top: 220px; left: 420px;">Common area</div>
        <div class="absolute text-sm font-semibold text-yellow-700 shadow-sm" style="top: 190px; left: 700px;">Coffee<br>machine</div>
        <div class="absolute text-sm font-semibold text-red-800 shadow-sm" style="top: 210px; left: 116px;">Front Elevator</div>
        <div class="absolute text-xs font-semibold text-red-800 shadow-sm"
            style="top: 716px; left: 463px; transform: rotate(12deg);">Back Elevator</div>

        <!-- Rooms -->
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 100px; left: 100px;">NU_01A23</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 100px; left: 370px;">NU_01A45</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 80px; left: 530px;">NU_01A55</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 100px; left: 700px;">NU_01A65</div>

        <div class="absolute text-sm font-semibold shadow-sm" style="top: 410px; left: 620px;">NU_01B03</div>
        <div class="absolute text-xs font-semibold shadow-sm"
            style="top: 490px; left: 610px; transform: rotate(12deg);">NU_01B11</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 574px; left: 594px;">NU_01B13</div>
        <div class="absolute text-xs font-semibold shadow-sm"
            style="top: 650px; left: 500px; transform: rotate(12deg);">NU_01B23</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 790px; left: 564px;">NU_01B29</div>

                                <!-- Walls and objects -->
                                <!-- A block left side -->
        <!-- NU_01A23 -->
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="40" :width="0.5"/>

        <!-- NU_01A13 -->
        <Line :status="7" :rotate="90" :height="50" :left="75" :top="150" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="50" :left="75" :top="185" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="50" :left="75" :top="230" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="50" :left="75" :top="280" :width="0.5"/>

        <Line :status="7" :rotate="0" :height="35" :left="75" :top="175" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="35" :left="51" :top="175" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="75" :left="51" :top="255" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="50" :left="75" :top="255" :width="0.5"/>

        <!-- Bridge on top of the front etrance -->
        <Line :status="7" :rotate="90" :height="120" :left="280" :top="125" :width="0.5"/>

                                <!-- A block right side -->
        <!-- A block right corridor -->
        <Line :status="7" :rotate="0" :height="165" :left="340" :top="120" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="460" :left="570" :top="-84" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="195" :left="434" :top="208" :width="0.5"/>

        <!-- NU_01A45 -->
        <Line :status="7" :rotate="0" :height="77" :left="510" :top="70" :width="0.5"/>
        <!-- NU_01A55 -->
        <Line :status="7" :rotate="0" :height="77" :left="610" :top="70" :width="0.5"/>

        <!-- Toilets -->
        <Line :status="7" :rotate="193" :height="100" :left="661" :top="263" :width="0.5"/>
        <Line :status="7" :rotate="193" :height="52" :left="710" :top="273" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="100" :left="720" :top="225" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="100" :left="708" :top="275" :width="0.5"/>

                                <!-- B block -->
        <!-- B block corridor -->
        <Line :status="7" :rotate="193" :height="334" :left="491" :top="323" :width="0.5"/>
        <Line :status="7" :rotate="193" :height="330" :left="522" :top="335" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="25" :left="465" :top="643" :width="0.5"/>

        <!-- NU_01B03 -->
        <Line :status="7" :rotate="103" :height="191" :left="652" :top="266" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="191" :left="625" :top="385" :width="0.5"/>

        <!-- NU_01B13 -->
        <Line :status="7" :rotate="103" :height="191" :left="615" :top="425" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="191" :left="590" :top="540" :width="0.5"/>

        <!-- NU_01B29 -->
        <Line :status="7" :rotate="103" :height="110" :left="620" :top="623" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="25" :left="551" :top="663" :width="0.5"/>
        <Line :status="7" :rotate="193" :height="15" :left="565" :top="665" :width="0.5"/>

        <!-- Atrium straircase -->
        <img :src="'./images/long_staircase.jpg'" class="absolute w-5" style="top: 325px; left: 502px; transform: rotate(13deg);">
        <img :src="'./images/long_staircase.jpg'" class="absolute w-6" style="top: 500px; left: 456px; transform: rotate(193deg);">

                                <!-- Unreachable Areas in C block -->
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="282" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="602" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="320" :left="220" :top="392" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="160" :left="312" :top="700" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="92" :left="266" :top="655" :width="0.5"/>

    </div>
</template>

<script>
import BaseFirstCommonVue from '../components/BaseFirstCommon.vue'
import Line from '../components/line.vue'

export default {
    name: 'FirstPlan',
    components: {
        Line,
        BaseFirstCommonVue
    },
}
</script>
