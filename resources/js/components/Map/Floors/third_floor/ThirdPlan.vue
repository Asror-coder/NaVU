<template>
    <div>
        <SecondThirdCommon />

                                <!-- Name of Rooms -->
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 80px; left: 60px;">NU_03A23</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 80px; left: 154px;">NU_03A31</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 360px; left: 60px;">NU_03A01</div>

        <div class="absolute text-sm font-semibold shadow-sm" style="top: 110px; left: 356px;">NU_03A45</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 110px; left: 460px;">NU_03A53</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 80px; left: 575px;">NU_03A61</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 80px; left: 710px;">NU_03A69</div>

        <div class="absolute text-sm font-semibold shadow-sm" style="top: 400px; left: 636px;">NU_03B03</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 500px; left: 610px;">NU_03B07</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 580px; left: 590px;">NU_03B17</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 670px; left: 616px;">NU_03B25</div>

        <div class="absolute text-sm font-semibold shadow-sm" style="top: 840px; left: 500px;">NU_03B35</div>

                                <!-- Walls and objects -->

                                <!-- A block left side -->
        <!-- NU_03A23 -->
        <Line :status="7" :rotate="90" :height="145" :left="72" :top="78" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="80" :left="143.5" :top="70" :width="0.5"/>

        <!-- NU_03A01 -->
        <Line :status="7" :rotate="90" :height="52" :left="26" :top="304" :width="0.5"/>

                                <!-- A block right side -->
        <!-- NU_03A45 -->
        <Line :status="7" :rotate="0" :height="144" :left="340" :top="100" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="158" :left="440" :top="77" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="10" :left="365" :top="234" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="26" :left="352" :top="230" :width="0.5"/>

        <!-- NU_03A53 -->
        <Line :status="7" :rotate="0" :height="164" :left="544" :top="70" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="180" :left="454" :top="144" :width="0.5"/>

        <!-- NU_03A61 -->
        <Line :status="7" :rotate="0" :height="77" :left="670" :top="70" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="256" :left="672" :top="18" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="30" :left="646" :top="146" :width="0.5"/>

        <!-- Toilets -->
        <Line :status="7" :rotate="103" :height="99" :left="709" :top="273" :width="0.5"/>

                                <!-- B block -->
        <Line :status="7" :rotate="13" :height="76" :left="663" :top="263" :width="0.5"/>
        <Line :status="7" :rotate="13" :height="308" :left="528" :top="312" :width="0.5"/>

        <!-- NU_03B03 -->
        <Line :status="7" :rotate="103" :height="194" :left="656" :top="240" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="194" :left="630" :top="360" :width="0.5"/>

        <!-- NU_03B07 -->
        <Line :status="7" :rotate="103" :height="194" :left="608" :top="450" :width="0.5"/>

        <!-- NU_03B17 -->
        <Line :status="7" :rotate="103" :height="194" :left="587" :top="540" :width="0.5"/>

        <!-- NU_03B25 -->
        <Line :status="7" :rotate="13" :height="46" :left="582" :top="636" :width="0.5"/>

                                <!-- Atrium -->
        <Line :status="7" :rotate="90" :height="81" :left="300" :top="194" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="84" :left="260" :top="151" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="40" :left="240" :top="132" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="81" :left="300" :top="224.56" :width="0.5"/>

    </div>
</template>

<script>
import SecondThirdCommon from '../components/SecondThirdCommon.vue'
import Line from '../components/line.vue'

export default {
    name: 'ThirdPlan',
    components: {
        Line,
        SecondThirdCommon
    },
}
</script>
