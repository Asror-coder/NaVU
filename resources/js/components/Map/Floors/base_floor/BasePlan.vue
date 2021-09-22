<template>
    <div>
        <BaseFirstCommonVue />

                                        <!-- Location names -->

        <!-- Common areas -->
        <div class="absolute text-sm font-semibold text-green-700 shadow-sm" style="top: 70px; left: 236px;">Front Entrance</div>
        <div class="absolute text-sm font-semibold text-green-700 shadow-sm" style="top: 895px; left: 330px;">Back Entrance</div>
        <div class="absolute text-sm font-semibold text-blue-800 shadow-sm" style="top: 480px; left: 330px;">Atrium</div>
        <div class="absolute text-sm font-semibold text-yellow-700 shadow-sm" style="top: 235px; left: 380px;">Atrium Cafe</div>
        <div class="absolute text-sm font-semibold text-red-800 shadow-sm" style="top: 210px; left: 116px;">Front Elevator</div>
        <div class="absolute text-xs font-semibold text-red-800 shadow-sm"
            style="top: 716px; left: 463px; transform: rotate(12deg);">Back Elevator</div>
        <div class="absolute text-sm font-semibold text-yellow-700 shadow-sm" style="top: 720px; left: 560px;">Grand Cafe</div>

        <!-- Rooms -->
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 400px; left: 600px;">NU_00B03</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 120px; left: 650px;">NU_00A63</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 120px; left: 420px;">NU_00A53</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 200px; left: 20px;">NU_00A23</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 550px; left: 80px;">NU_00C07</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 800px; left: 110px;">NU_00C45</div>

                                        <!-- Walls and objects -->

        <!-- NU_00C07 -->
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="282" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="602" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="320" :left="220" :top="392" :width="0.5"/>

        <!-- Left side from the back entrance -->
        <Line :status="7" :rotate="0" :height="160" :left="312" :top="700" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="92" :left="266" :top="655" :width="0.5"/>

        <!-- NU_00A53 -->
        <Line :status="7" :rotate="0" :height="95" :left="340" :top="120" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="20" :left="350" :top="204" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="22" :left="360" :top="213" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="216" :left="468" :top="126" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="165" :left="563" :top="70" :width="0.5"/>

        <!-- NU_00A53 South wall -->
        <Line :status="7" :rotate="103" :height="134" :left="707" :top="180" :width="0.5"/>

        <!-- NU_00B03 South wall -->
        <Line :status="7" :rotate="103" :height="134" :left="702" :top="202" :width="0.5"/>
        <Line :status="7" :rotate="193" :height="122" :left="539" :top="233" :width="0.5"/>
        <Line :status="7" :rotate="193" :height="220" :left="501" :top="444" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="97" :left="526" :top="352" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="200" :left="605" :top="450" :width="0.5"/>

        <!-- Atrium straircase -->
        <img :src="'./images/long_staircase.jpg'" class="absolute w-5" style="top: 300px; left: 510px; transform: rotate(13deg);">
        <img :src="'./images/long_staircase.jpg'" class="absolute w-6" style="top: 500px; left: 460px; transform: rotate(193deg);">
    </div>
</template>

<script>
import BaseFirstCommonVue from '../components/BaseFirstCommon.vue'
import Line from '../components/line.vue'

export default {
    name: 'BasePlan',
    components: {
        Line,
        BaseFirstCommonVue
    }
}
</script>
