<template>
    <div>
        <SecondThirdCommon />

        <!-- Name of Rooms -->
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 80px; left: 20px;">NU_02A23</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 80px; left: 130px;">NU_02A29</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 360px; left: 60px; transform: rotate(90deg);">NU_02A01</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 350px; left: 130px;">NU_02A02</div>

        <div class="absolute text-xs font-semibold shadow-sm" style="top: 92px; left: 370px;">NU_02A45</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 80px; left: 448px;">NU_02A53</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 80px; left: 514px;">NU_02A55</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 80px; left: 580px;">NU_02A61</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 80px; left: 660px;">NU_01A65</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 80px; left: 746px;">NU_01A73</div>

        <div class="absolute text-xs font-semibold shadow-sm" style="top: 225px; left: 370px;">NU_02A46</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 225px; left: 474px;">NU_02A54</div>

        <div class="absolute text-sm font-semibold shadow-sm" style="top: 360px; left: 678px;">NU_02B03</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 440px; left: 662px;">NU_02B05</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 520px; left: 640px;">NU_02B11</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 600px; left: 620px;">NU_02B17</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 670px; left: 610px;">NU_02B25</div>

        <div class="absolute text-sm font-semibold shadow-sm" style="top: 320px; left: 540px;">NU_02B04</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 450px; left: 510px;">NU_02B12</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 532px; left: 488px;">NU_02B18</div>
        <div class="absolute text-xs font-semibold shadow-sm" style="top: 607px; left: 478px; transform: rotate(13deg);">NU_02B26</div>

        <div class="absolute text-sm font-semibold shadow-sm" style="top: 870px; left: 540px;">NU_02B35_1</div>
        <div class="absolute text-sm font-semibold shadow-sm" style="top: 840px; left: 450px;">NU_02B35_2</div>

                                <!-- Walls and objects -->
                                <!-- A block left side -->
        <!-- NU_02A23 -->
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="40" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="80" :left="100" :top="70" :width="0.5"/>

        <!-- NU_02A01 -->
        <Line :status="7" :rotate="0" :height="110" :left="51" :top="330" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="110" :left="100" :top="330" :width="0.5"/>

        <!-- Bridge on top of the front etrance -->
        <Line :status="7" :rotate="90" :height="120" :left="280" :top="125" :width="0.5"/>

                                <!-- A block right side -->
        <!-- A block right corridor -->
        <Line :status="7" :rotate="0" :height="165" :left="340" :top="100" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="460" :left="570" :top="-84" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="206" :left="442" :top="70" :width="0.5"/>

        <!-- NU_02A46 -->
        <Line :status="7" :rotate="0" :height="94" :left="460" :top="172" :width="0.5"/>
        <!-- NU_02A54 -->
        <Line :status="7" :rotate="0" :height="94" :left="544" :top="172" :width="0.5"/>

        <!-- NU_02A45 -->
        <Line :status="7" :rotate="0" :height="70" :left="440" :top="77" :width="0.5"/>
        <!-- NU_02A53 -->
        <Line :status="7" :rotate="0" :height="77" :left="510" :top="70" :width="0.5"/>
        <!-- NU_02A55 -->
        <Line :status="7" :rotate="0" :height="77" :left="574" :top="70" :width="0.5"/>
        <!-- NU_02A61 -->
        <Line :status="7" :rotate="0" :height="77" :left="640" :top="70" :width="0.5"/>
        <!-- NU_02A65 -->
        <Line :status="7" :rotate="0" :height="77" :left="740" :top="70" :width="0.5"/>

                                <!-- B block -->
        <!-- B block corridor -->
        <Line :status="7" :rotate="193" :height="430" :left="624" :top="257.5" :width="0.5"/>
        <Line :status="7" :rotate="193" :height="320" :left="590" :top="300" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="25" :left="465" :top="643" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="222" :left="648" :top="198" :width="0.5"/>

        <!-- NU_02B04 -->
        <Line :status="7" :rotate="103" :height="88" :left="550" :top="390" :width="0.5"/>
        <!-- NU_02B12 -->
        <Line :status="7" :rotate="103" :height="88" :left="528" :top="480" :width="0.5"/>
        <!-- NU_02B10 -->
        <Line :status="7" :rotate="103" :height="88" :left="510" :top="560" :width="0.5"/>

        <!-- NU_02B03 -->
        <Line :status="7" :rotate="103" :height="98" :left="694" :top="344" :width="0.5"/>
        <!-- NU_02B05 -->
        <Line :status="7" :rotate="103" :height="98" :left="678" :top="415" :width="0.5"/>
        <!-- NU_02B11 -->
        <Line :status="7" :rotate="103" :height="98" :left="655" :top="504" :width="0.5"/>
        <!-- NU_02B17 -->
        <Line :status="7" :rotate="103" :height="98" :left="637" :top="582" :width="0.5"/>

        <!-- NU_02B35_1 -->
        <Line :status="7" :rotate="193" :height="122" :left="540" :top="780" :width="0.5"/>

        <!-- Atrium -->
        <Line :status="7" :rotate="0" :height="80" :left="260" :top="184" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="148" :left="385" :top="662" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="150" :left="312" :top="736" :width="0.5"/>
        <img :src="'./images/long_staircase.jpg'" class="absolute w-6" style="top: 596px; left: 432px; transform: rotate(193deg);">

    </div>
</template>

<script>
import SecondThirdCommon from '../components/SecondThirdCommon.vue'
import Line from '../components/line.vue'

export default {
    name: 'SecondPlan',
    components: {
        Line,
        SecondThirdCommon
    },
}
</script>
