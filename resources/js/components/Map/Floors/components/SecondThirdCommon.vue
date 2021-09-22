<template>
    <div>
        <!-- Name of Common areas -->
        <div class="absolute text-sm font-semibold text-yellow-700 shadow-sm" style="top: 190px; left: 700px;">Coffee<br>machine</div>
        <div class="absolute text-sm font-semibold text-red-800 shadow-sm" style="top: 210px; left: 116px;">Front Elevator</div>
        <div class="absolute text-xs font-semibold text-red-800 shadow-sm"
            style="top: 716px; left: 463px; transform: rotate(12deg);">Back Elevator</div>
        <div class="absolute text-sm font-semibold text-blue-800 shadow-sm"
            style="top: 704px; left: 600px; transform: rotate(12deg);">Toilets</div>

        <!-- left part of the front -->
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="-40" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="260" :left="220" :top="70" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="260" :left="0" :top="70" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="170" :left="136" :top="245" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="120" :left="220" :top="330" :width="0.5"/>

        <!-- front elevator -->
        <Line :status="7" :rotate="90" :height="120" :left="159" :top="115" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="120" :left="159" :top="150" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="120" :left="159" :top="195" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="130" :left="100" :top="175" :width="0.5"/>

        <Line :status="7" :rotate="0" :height="35" :left="140" :top="175" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="35" :left="180" :top="175" :width="0.5"/>

        <img :src="'./images/elevator.jpg'" class="absolute w-6" style="top: 180px; left: 110px;">
        <img :src="'./images/elevator.jpg'" class="absolute w-6" style="top: 180px; left: 150px;">
        <img :src="'./images/elevator.jpg'" class="absolute w-6" style="top: 180px; left: 190px;">
        <img :src="'./images/elevator.jpg'" class="absolute w-6" style="top: 260px; left: 110px;">

        <!-- front-left staircase -->
        <Line :status="7" :rotate="90" :height="120" :left="159" :top="245" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="50" :left="140" :top="255" :width="0.5"/>

        <img :src="'./images/staircase.jpg'" class="absolute w-14" style="top: 260px; left: 150px;">

        <!-- corridor on the left from front elevator -->
        <Line :status="7" :rotate="90" :height="50" :left="75" :top="150" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="50" :left="75" :top="185" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="50" :left="75" :top="230" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="50" :left="75" :top="280" :width="0.5"/>

        <Line :status="7" :rotate="0" :height="35" :left="75" :top="175" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="35" :left="51" :top="175" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="75" :left="51" :top="255" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="50" :left="75" :top="255" :width="0.5"/>

        <!-- top of front entrance -->
        <Line :status="7" :rotate="90" :height="118" :left="280" :top="42" :width="0.5"/>

        <!-- front-right staircase -->
        <Line :status="7" :rotate="90" :height="68" :left="623" :top="141" :width="0.5"/>

        <Line :status="7" :rotate="13" :height="118" :left="576" :top="173" :width="0.5"/>
        <Line :status="7" :rotate="13" :height="133" :left="641" :top="173" :width="0.5"/>

        <Line :status="7" :rotate="103" :height="64" :left="594" :top="264" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="64" :left="597" :top="253" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="64" :left="605" :top="219" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="64" :left="612" :top="188" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="64" :left="619" :top="159" :width="0.5"/>

        <img :src="'./images/staircase.jpg'" class="absolute w-11" style="top: 252px; left: 580px; transform: rotate(13deg);">

        <!-- right part from the front-->
        <Line :status="7" :rotate="90" :height="351" :left="640" :top="-105" :width="0.5"/>
        <!-- <Line :status="7" :rotate="0" :height="32" :left="340" :top="100" :width="0.5"/> -->
        <Line :status="7" :rotate="76" :height="130" :left="402" :top="21" :width="0.5"/>

        <!-- East perimeter -->
        <Line :status="7" :rotate="0" :height="65" :left="0" :top="329" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="520" :left="0" :top="393" :width="0.5"/>

        <!-- left part from the back entrance -->
        <Line :status="7" :rotate="90" :height="312" :left="156" :top="755" :width="0.5"/>

        <!-- top of back entrance -->
        <Line :status="7" :rotate="0" :height="52" :left="312" :top="860" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="118" :left="371" :top="801" :width="0.5"/>

        <!-- right part from the back -->
        <Line :status="7" :rotate="90" :height="75" :left="584" :top="873.5" :width="0.5"/>
        <Line :status="7" :rotate="113" :height="130" :left="489.5" :top="821" :width="0.5"/>

        <!-- West perimeter -->
        <Line :status="7" :rotate="13" :height="865" :left="720" :top="59" :width="0.5"/>

        <!-- back elevator and back staircase -->
        <Line :status="7" :rotate="90" :height="67" :left="480" :top="755" :width="0.5"/>

        <Line :status="7" :rotate="13" :height="208" :left="454" :top="655" :width="0.5"/>
        <Line :status="7" :rotate="13" :height="118" :left="526" :top="672.5" :width="0.5"/>
        <Line :status="7" :rotate="13" :height="26" :left="486" :top="747" :width="0.5"/>

        <Line :status="7" :rotate="103" :height="64" :left="483" :top="740" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="64" :left="489" :top="715" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="64" :left="497" :top="681" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="64" :left="505" :top="645" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="64" :left="509" :top="634" :width="0.5"/>

        <!-- A-right block toilets -->
        <Line :status="7" :rotate="13" :height="50" :left="710" :top="273" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="100" :left="720" :top="225" :width="0.5"/>

        <!-- B block toilets -->
        <Line :status="7" :rotate="103" :height="150" :left="598" :top="612" :width="0.5"/>
        <Line :status="7" :rotate="13" :height="50" :left="571" :top="680" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="98" :left="612" :top="690" :width="0.5"/>
        <Line :status="7" :rotate="103" :height="135" :left="581" :top="720" :width="0.5"/>

        <!-- Unreachable Areas in C block -->
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="330" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="221" :left="110" :top="602" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="274" :left="220" :top="440" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="199" :left="200" :top="713" :width="0.5"/>

        <!-- Atrium -->
        <Line :status="7" :rotate="90" :height="206" :left="442" :top="162" :width="0.5"/>
        <Line :status="7" :rotate="0" :height="408" :left="260" :top="264" :width="0.5"/>
        <Line :status="7" :rotate="13" :height="420" :left="497" :top="259" :width="0.5"/>
        <Line :status="7" :rotate="90" :height="190" :left="354" :top="577" :width="0.5"/>

        <img :src="'./images/elevator.jpg'" class="absolute w-5" style="top: 746px; left: 462px; transform: rotate(13deg);">
        <img :src="'./images/elevator.jpg'" class="absolute w-5" style="top: 753px; left: 492px; transform: rotate(13deg);">

        <img :src="'./images/staircase.jpg'" class="absolute w-11" style="top: 678px; left: 480px; transform: rotate(13deg);">
    </div>
</template>

<script>
import Line from './line.vue'

export default {
    name: 'SecondThirdCommon',
    components: {
        Line
    }
}
</script>
