<template>
    <div>
                                <!-- A block left side -->
        <!-- Front Elevator (2A-elevator)-->
        <div v-show="isInNodes('2A-elevator')">
            <Line :status="getStatus('2A-elevator')" :rotate="90" :height="56" :left="126" :top="205" :width="2"/>
        </div>

        <!-- 2A-LC-elevator -->
        <div v-show="isInNodes('2A-LC-elevator')">
            <Line :status="getStatus('2A-LC-elevator')" :rotate="0" :height="62" :left="26" :top="174" :width="2"
                v-show="isInPath('2A-LC-elevator','2A-LC-NU_02A23')"/>
            <Line :status="getStatus('2A-LC-elevator')" :rotate="90" :height="74" :left="59" :top="196" :width="2"
                v-show="isInPath('2A-LC-elevator','2A-elevator')"/>
            <Line :status="getStatus('2A-LC-elevator')" :rotate="0" :height="70" :left="26" :top="236" :width="2"
                v-show="isInPath('2A-LC-elevator','2A-LC-NU_02A01')"/>
        </div>

        <!-- NU_02A01 -->
        <div v-show="isInNodes('NU_02A01')">
            <Line :status="getStatus('NU_02A01')" :rotate="90" :height="20" :left="59" :top="354" :width="2"/>
            <Line :status="getStatus('NU_02A01')" :rotate="0" :height="50" :left="66" :top="360" :width="2"/>
        </div>

        <!-- 2A-LC-NU_02A01 -->
        <div v-show="isInNodes('2A-LC-NU_02A01')">
            <Line :status="getStatus('2A-LC-NU_02A01')" :rotate="90" :height="20" :left="37" :top="354" :width="2"/>
            <Line :status="getStatus('2A-LC-NU_02A01')" :rotate="0" :height="62" :left="26" :top="306" :width="2"/>
        </div>

        <!-- NU_02A02 -->
        <div v-show="isInNodes('NU_02A02')">
            <Line :status="getStatus('NU_02A02')" :rotate="90" :height="60" :left="186" :top="360" :width="2"/>
        </div>

        <!-- NU_02A23 -->
        <div v-show="isInNodes('NU_02A23')">
            <Line :status="getStatus('NU_02A23')" :rotate="0" :height="40" :left="50" :top="109" :width="2"/>
        </div>

        <!-- 2A-LC-NU_02A23 -->
        <div v-show="isInNodes('2A-LC-NU_02A23')">
            <Line :status="getStatus('2A-LC-NU_02A23')" :rotate="0" :height="10" :left="26" :top="164" :width="2"
                v-show="isInPath('2A-LC-NU_02A23','2A-LC-elevator')"/>
            <Line :status="getStatus('2A-LC-NU_02A23')" :rotate="90" :height="32" :left="38" :top="148" :width="2"
                v-show="isInPath('2A-LC-NU_02A23','2A-LC-elevator')"/>
            <Line :status="getStatus('2A-LC-NU_02A23')" :rotate="0" :height="10" :left="50" :top="152" :width="2"
                v-show="isInPath('2A-LC-NU_02A23','NU_02A23')"/>
            <Line :status="getStatus('2A-LC-NU_02A23')" :rotate="90" :height="50" :left="71" :top="139" :width="2"
                v-show="isInPath('2A-LC-NU_02A23','2A-LC-NU_02A29')"/>
        </div>

        <!-- NU_02A29 -->
        <div v-show="isInNodes('NU_02A29')">
            <Line :status="getStatus('NU_02A29')" :rotate="0" :height="40" :left="155" :top="109" :width="2"/>
        </div>

        <!-- 2A-LC-NU_02A29 -->
        <div v-show="isInNodes('2A-LC-NU_02A29')">
            <Line :status="getStatus('2A-LC-NU_02A29')" :rotate="0" :height="10" :left="155" :top="152" :width="2"
                v-show="isInPath('2A-LC-NU_02A29','NU_02A29')"/>
            <Line :status="getStatus('2A-LC-NU_02A29')" :rotate="90" :height="64" :left="127" :top="132" :width="2"
                v-show="isInPath('2A-LC-NU_02A29','2A-LC-NU_02A23')"/>
            <Line :status="getStatus('2A-LC-NU_02A29')" :rotate="90" :height="65" :left="183.5" :top="132" :width="2"
                v-show="isInPath('2A-LC-NU_02A29','2At-Bridge')"/>
        </div>

                                <!-- A block right side -->
        <!-- NU_02A45 -->
        <div v-show="isInNodes('NU_02A45')">
            <Line :status="getStatus('NU_02A45')" :rotate="0" :height="35" :left="400" :top="110" :width="2"/>
        </div>

        <!-- NU_02A46 -->
        <div v-show="isInNodes('NU_02A46')">
            <Line :status="getStatus('NU_02A46')" :rotate="0" :height="35" :left="400" :top="174" :width="2"/>
        </div>

        <!-- 2A-RC-NU_02A46 -->
        <div v-show="isInNodes('2A-RC-NU_02A46')">
            <Line :status="getStatus('2A-RC-NU_02A46')" :rotate="90" :height="66" :left="371" :top="131" :width="2"
                v-show="isInPath('2A-RC-NU_02A46','2At-Bridge')"/>
            <Line :status="getStatus('2A-RC-NU_02A46')" :rotate="0" :height="12" :left="400" :top="160" :width="2"
                v-show="isInPath('2A-RC-NU_02A46','NU_02A46')"/>
            <Line :status="getStatus('2A-RC-NU_02A46')" :rotate="0" :height="20" :left="400" :top="147" :width="2"
                v-show="isInPath('2A-RC-NU_02A46','NU_02A45')"/>
            <Line :status="getStatus('2A-RC-NU_02A46')" :rotate="90" :height="42" :left="417" :top="143" :width="2"
                v-show="isInPath('2A-RC-NU_02A46','2A-RC-NU_02A54')"/>
        </div>

        <!-- NU_02A53 -->
        <div v-show="isInNodes('NU_02A53')">
            <Line :status="getStatus('NU_02A53')" :rotate="0" :height="35" :left="484" :top="110" :width="2"/>
        </div>

        <!-- NU_02A54 -->
        <div v-show="isInNodes('NU_02A54')">
            <Line :status="getStatus('NU_02A54')" :rotate="0" :height="35" :left="484" :top="174" :width="2"/>
        </div>

        <!-- 2A-RC-NU_02A54 -->
        <div v-show="isInNodes('2A-RC-NU_02A54')">
            <Line :status="getStatus('2A-RC-NU_02A54')" :rotate="90" :height="51" :left="463" :top="138.5" :width="2"
                v-show="isInPath('2A-RC-NU_02A54','2A-RC-NU_02A46')"/>
            <Line :status="getStatus('2A-RC-NU_02A54')" :rotate="0" :height="12" :left="484" :top="160" :width="2"
                v-show="isInPath('2A-RC-NU_02A54','NU_02A54')"/>
            <Line :status="getStatus('2A-RC-NU_02A54')" :rotate="0" :height="20" :left="484" :top="147" :width="2"
                v-show="isInPath('2A-RC-NU_02A54','NU_02A46')"/>
            <Line :status="getStatus('2A-RC-NU_02A54')" :rotate="90" :height="30" :left="495" :top="149" :width="2"
                v-show="isInPath('2A-RC-NU_02A54','2A-RC-NU_02A55')"/>
        </div>

        <!-- NU_02A55 -->
        <div v-show="isInNodes('NU_02A55')">
            <Line :status="getStatus('NU_02A55')" :rotate="0" :height="35" :left="540" :top="110" :width="2"/>
        </div>

        <!-- 2A-RC-NU_02A55 -->
        <div v-show="isInNodes('2A-RC-NU_02A55')">
            <Line :status="getStatus('2A-RC-NU_02A55')" :rotate="90" :height="36" :left="526" :top="145.5" :width="2"
                v-show="isInPath('2A-RC-NU_02A55','2A-RC-NU_02A54')"/>
            <Line :status="getStatus('2A-RC-NU_02A55')" :rotate="0" :height="20" :left="540" :top="147" :width="2"
                v-show="isInPath('2A-RC-NU_02A55','NU_02A55')"/>
            <Line :status="getStatus('2A-RC-NU_02A55')" :rotate="90" :height="36" :left="554" :top="145.5" :width="2"
                v-show="isInPath('2A-RC-NU_02A55','2A-RC-NU_02A61')"/>
        </div>

        <!-- NU_02A61 -->
        <div v-show="isInNodes('NU_02A61')">
            <Line :status="getStatus('NU_02A61')" :rotate="0" :height="35" :left="605" :top="110" :width="2"/>
        </div>

        <!-- 2A-RC-NU_02A61 -->
        <div v-show="isInNodes('2A-RC-NU_02A61')">
            <Line :status="getStatus('2A-RC-NU_02A61')" :rotate="90" :height="37" :left="590" :top="145" :width="2"
                v-show="isInPath('2A-RC-NU_02A61','2A-RC-NU_02A55')"/>
            <Line :status="getStatus('2A-RC-NU_02A61')" :rotate="0" :height="20" :left="605" :top="147" :width="2"
                v-show="isInPath('2A-RC-NU_02A61','NU_02A61')"/>
            <Line :status="getStatus('2A-RC-NU_02A61')" :rotate="90" :height="36" :left="619" :top="145.5" :width="2"
                v-show="isInPath('2A-RC-NU_02A61','2A-RC-NU_02A65')"/>
        </div>

        <!-- NU_02A65 -->
        <div v-show="isInNodes('NU_02A65')">
            <Line :status="getStatus('NU_02A65')" :rotate="0" :height="35" :left="680" :top="110" :width="2"/>
        </div>

        <!-- 2A-RC-NU_02A65 -->
        <div v-show="isInNodes('2A-RC-NU_02A65')">
            <Line :status="getStatus('2A-RC-NU_02A65')" :rotate="90" :height="46" :left="660" :top="141" :width="2"
                v-show="isInPath('2A-RC-NU_02A65','2A-RC-NU_02A61')"/>
            <Line :status="getStatus('2A-RC-NU_02A65')" :rotate="0" :height="20" :left="680" :top="147" :width="2"
                v-show="isInPath('2A-RC-NU_02A65','NU_02A65')"/>
            <Line :status="getStatus('2A-RC-NU_02A65')" :rotate="90" :height="50" :left="701" :top="138.5" :width="2"
                v-show="isInPath('2A-RC-NU_02A65','2A-RC-NU_02A73')"/>
            <Line :status="getStatus('2A-RC-NU_02A65')" :rotate="13" :height="10" :left="679" :top="165" :width="2"
                v-show="isInPath('2A-RC-NU_02A65','2A-CM')"/>
        </div>

        <!-- NU_02A73 -->
        <div v-show="isInNodes('NU_02A73')">
            <Line :status="getStatus('NU_02A73')" :rotate="0" :height="35" :left="760" :top="110" :width="2"/>
        </div>

        <!-- 2A-RC-NU_02A73 -->
        <div v-show="isInNodes('2A-RC-NU_02A73')">
            <Line :status="getStatus('2A-RC-NU_02A73')" :rotate="90" :height="46" :left="740" :top="141" :width="2"/>
            <Line :status="getStatus('2A-RC-NU_02A73')" :rotate="0" :height="20" :left="760" :top="147" :width="2"/>
        </div>

        <!-- Coffee Machine (2A-CM) -->
        <div v-show="isInNodes('2A-CM')">
            <Line :status="getStatus('2A-CM')" :rotate="13" :height="34" :left="674" :top="174" :width="2"
                v-show="isInPath('2A-CM','2A-RC-NU_02A65')"/>
            <!-- <Line :status="getStatus('2A-CM')" :rotate="103" :height="20" :left="676" :top="200" :width="2"/> -->
            <Line :status="getStatus('2A-CM')" :rotate="13" :height="104" :left="658.5" :top="206" :width="2"
                v-show="isInPath('2A-CM','2B-C-NU_02B03')"/>
        </div>

                                <!-- B block -->
        <!-- NU_02B03 -->
        <div v-show="isInNodes('NU_02B03')">
            <Line :status="getStatus('NU_02B03')" :rotate="103" :height="40" :left="672" :top="325" :width="2"/>
        </div>

        <!--2B-C-NU_02B03-->
        <div v-show="isInNodes('2B-C-NU_02B03')">
            <Line :status="getStatus('2B-C-NU_02B03')" :rotate="13" :height="32" :left="642" :top="310" :width="2"
                v-show="isInPath('2B-C-NU_02B03','2A-CM')"/>
            <Line :status="getStatus('2B-C-NU_02B03')" :rotate="103" :height="16" :left="643" :top="330" :width="2"
                v-show="isInPath('2B-C-NU_02B03','NU_02B03')"/>
            <Line :status="getStatus('2B-C-NU_02B03')" :rotate="13" :height="40" :left="634" :top="340" :width="2"
                v-show="isInPath('2B-C-NU_02B03','2B-C-NU_02B05')"/>
        </div>

        <!-- NU_02B04 -->
        <div v-show="isInNodes('NU_02B04')">
            <Line :status="getStatus('NU_02B04')" :rotate="103" :height="40" :left="578" :top="382" :width="2"/>
        </div>

        <!-- NU_02B05 -->
        <div v-show="isInNodes('NU_02B05')">
            <Line :status="getStatus('NU_02B05')" :rotate="103" :height="40" :left="655" :top="400" :width="2"/>
        </div>

        <!--2B-C-NU_02B05-->
        <div v-show="isInNodes('2B-C-NU_02B05')">
            <Line :status="getStatus('2B-C-NU_02B05')" :rotate="13" :height="38" :left="625" :top="378" :width="2"
                v-show="isInPath('2B-C-NU_02B05','2B-C-NU_02B03')"/>
            <Line :status="getStatus('2B-C-NU_02B05')" :rotate="103" :height="16" :left="626" :top="405" :width="2"
                v-show="isInPath('2B-C-NU_02B05','NU_02B05')"/>
            <Line :status="getStatus('2B-C-NU_02B05')" :rotate="103" :height="26" :left="613" :top="397" :width="2"
                v-show="isInPath('2B-C-NU_02B05','NU_02B04')"/>
            <Line :status="getStatus('2B-C-NU_02B05')" :rotate="13" :height="38" :left="616.5" :top="415" :width="2"
                v-show="isInPath('2B-C-NU_02B05','2B-C-NU_02B11')"/>
        </div>

        <!-- NU_02B11 -->
        <div v-show="isInNodes('NU_02B11')">
            <Line :status="getStatus('NU_02B11')" :rotate="103" :height="40" :left="636" :top="481" :width="2"/>
        </div>

        <!-- NU_02B12 -->
        <div v-show="isInNodes('NU_02B12')">
            <Line :status="getStatus('NU_02B12')" :rotate="103" :height="40" :left="560" :top="463" :width="2"/>
        </div>

        <!--2B-C-NU_02B11-->
        <div v-show="isInNodes('2B-C-NU_02B11')">
            <Line :status="getStatus('2B-C-NU_02B11')" :rotate="13" :height="44" :left="607.5" :top="452" :width="2"
                v-show="isInPath('2B-C-NU_02B11','2B-C-NU_02B05')"/>
            <Line :status="getStatus('2B-C-NU_02B11')" :rotate="103" :height="16" :left="607" :top="486" :width="2"
                v-show="isInPath('2B-C-NU_02B11','NU_02B11')"/>
            <Line :status="getStatus('2B-C-NU_02B11')" :rotate="103" :height="26" :left="594" :top="478" :width="2"
                v-show="isInPath('2B-C-NU_02B11','NU_02B12')"/>
            <Line :status="getStatus('2B-C-NU_02B11')" :rotate="13" :height="44" :left="597.5" :top="494" :width="2"
                v-show="isInPath('2B-C-NU_02B11','2B-C-NU_02B17')"/>
        </div>

        <!-- NU_02B17 -->
        <div v-show="isInNodes('NU_02B17')">
            <Line :status="getStatus('NU_02B17')" :rotate="103" :height="40" :left="617" :top="566" :width="2"/>
        </div>

        <!-- NU_02B18 -->
        <div v-show="isInNodes('NU_02B18')">
            <Line :status="getStatus('NU_02B18')" :rotate="103" :height="40" :left="540" :top="548" :width="2"/>
        </div>

        <!--2B-C-NU_02B17-->
        <div v-show="isInNodes('2B-C-NU_02B17')">
            <Line :status="getStatus('2B-C-NU_02B17')" :rotate="13" :height="40" :left="588.5" :top="536" :width="2"
                v-show="isInPath('2B-C-NU_02B17','2B-C-NU_02B11')"/>
            <Line :status="getStatus('2B-C-NU_02B17')" :rotate="103" :height="16" :left="587" :top="571" :width="2"
                v-show="isInPath('2B-C-NU_02B17','NU_02B17')"/>
            <Line :status="getStatus('2B-C-NU_02B17')" :rotate="103" :height="26" :left="574.5" :top="563" :width="2"
                v-show="isInPath('2B-C-NU_02B17','NU_02B18')"/>
            <Line :status="getStatus('2B-C-NU_02B17')" :rotate="13" :height="48" :left="578.5" :top="574" :width="2"
                v-show="isInPath('2B-C-NU_02B17','NU_02B26')"/>
        </div>

        <!-- NU_02B25 -->
        <div v-show="isInNodes('NU_02B25')">
            <Line :status="getStatus('NU_02B25')" :rotate="103" :height="40" :left="600" :top="636" :width="2"/>
        </div>

        <!-- NU_02B26 -->
        <div v-show="isInNodes('NU_02B26')">
            <Line :status="getStatus('NU_02B26')" :rotate="13" :height="30" :left="570.5" :top="620" :width="2"
                v-show="isInPath('NU_02B26','2B-C-NU_02B17')"/>
            <Line :status="getStatus('NU_02B26')" :rotate="103" :height="16" :left="571" :top="641" :width="2"
                v-show="isInPath('NU_02B26','NU_02B25')"/>
            <Line :status="getStatus('NU_02B26')" :rotate="103" :height="106" :left="519.5" :top="584" :width="2"
                v-show="isInPath('NU_02B26','2At-Staircase')"/>
            <Line :status="getStatus('NU_02B26')" :rotate="13" :height="30" :left="468" :top="625" :width="2"
                v-show="isInPath('NU_02B26','2At-Staircase')"/>
            <Line :status="getStatus('NU_02B26')" :rotate="13" :height="30" :left="564.5" :top="648" :width="2"
                v-show="isInPath('NU_02B26','2B-C-elevator')"/>
        </div>

        <!-- NU_02B35_1 -->
        <div v-show="isInNodes('NU_02B35_1')">
            <Line :status="getStatus('NU_02B35_1')" :rotate="13" :height="50" :left="586" :top="792" :width="2"/>
        </div>

        <!-- NU_02B35_2 -->
        <div v-show="isInNodes('NU_02B35_2')">
            <Line :status="getStatus('NU_02B35_2')" :rotate="13" :height="50" :left="532" :top="778" :width="2"/>
        </div>

        <!-- Back Elevator (2B-elevator) -->
        <div v-show="isInNodes('2B-elevator')">
            <Line :status="getStatus('2B-elevator')" :rotate="103" :height="35" :left="502" :top="720" :width="2"/>
        </div>

        <!--2B-C-elevator-->
        <div v-show="isInNodes('2B-C-elevator')">
            <Line :status="getStatus('2B-C-elevator')" :rotate="13" :height="72" :left="552.5" :top="680" :width="2"
                v-show="isInPath('2B-C-elevator','NU_02B26')"/>
            <Line :status="getStatus('2B-C-elevator')" :rotate="103" :height="26" :left="535.5" :top="732" :width="2"
                v-show="isInPath('2B-C-elevator','2B-elevator')"/>
            <Line :status="getStatus('2B-C-elevator')" :rotate="103" :height="63" :left="572" :top="722" :width="2"
                v-show="isInPath('2B-C-elevator','NU_02B35_1')"/>
            <Line :status="getStatus('2B-C-elevator')" :rotate="13" :height="34" :left="596" :top="755.5" :width="2"
                v-show="isInPath('2B-C-elevator','NU_02B35_1')"/>
            <Line :status="getStatus('2B-C-elevator')" :rotate="13" :height="34" :left="542.5" :top="743" :width="2"
                v-show="isInPath('2B-C-elevator','NU_02B35_2')"/>
        </div>

                                <!-- Atrium -->
        <!-- 2At-Bridge -->
        <div v-show="isInNodes('2At-Bridge')">
            <Line :status="getStatus('2At-Bridge')" :rotate="0" :height="24" :left="238" :top="160" :width="2"
                v-show="isInPath('2At-Bridge','2At-A')"/>
            <Line :status="getStatus('2At-Bridge')" :rotate="90" :height="24" :left="230" :top="152" :width="2"
                v-show="isInPath('2At-Bridge','2A-LC-NU_02A29')"/>
            <Line :status="getStatus('2At-Bridge')" :rotate="90" :height="100" :left="286" :top="114" :width="2"
                v-show="isInPath('2At-Bridge','2A-RC-NU_02A46')"/>
        </div>

        <!-- 2At-A -->
        <div v-show="isInNodes('2At-A')">
            <Line :status="getStatus('2At-A')" :rotate="0" :height="134" :left="238" :top="186" :width="2"/>
        </div>

        <!-- 2At-NU_02A02 -->
        <div v-show="isInNodes('2At-NU_02A02')">
            <Line :status="getStatus('2At-NU_02A02')" :rotate="0" :height="70" :left="238" :top="320" :width="2"
                v-show="isInPath('2At-NU_02A02','2At-A')"/>
            <Line :status="getStatus('2At-NU_02A02')" :rotate="90" :height="24" :left="230" :top="378" :width="2"
                v-show="isInPath('2At-NU_02A02','NU_02A02')"/>
            <Line :status="getStatus('2At-NU_02A02')" :rotate="0" :height="70" :left="238" :top="390" :width="2"
                v-show="isInPath('2At-NU_02A02','2At-C-1')"/>
        </div>

        <!-- 2At-C-1 -->
        <div v-show="isInNodes('2At-C-1')">
            <Line :status="getStatus('2At-C-1')" :rotate="0" :height="134" :left="238" :top="460" :width="2"/>
        </div>

        <!-- 2At-C-2 -->
        <div v-show="isInNodes('2At-C-2')">
            <Line :status="getStatus('2At-C-2')" :rotate="0" :height="134" :left="238" :top="580" :width="2"/>
            <Line :status="getStatus('2At-C-2')" :rotate="90" :height="24" :left="247" :top="698" :width="2"/>
        </div>

        <!-- 2At-C-3 -->
        <div v-show="isInNodes('2At-C-3')">
            <Line :status="getStatus('2At-C-3')" :rotate="90" :height="110" :left="314" :top="655" :width="2"/>
        </div>

        <!-- 2At-Staircase -->
        <div v-show="isInNodes('2At-Staircase')">
            <Line :status="getStatus('2At-Staircase')" :rotate="90" :height="60" :left="396" :top="680" :width="2"
                v-show="isInPath('2At-Staircase','2At-C-3')"/>
            <Line :status="getStatus('2At-Staircase')" :rotate="13" :height="40" :left="427" :top="670" :width="2"
                v-show="isInPath('2At-Staircase','atrium-staircases') || isInPath('2At-Staircase','1B-C-NU_01B13')"/>
            <Line :status="getStatus('2At-Staircase')" :rotate="90" :height="36" :left="437.5" :top="692" :width="2"
                v-show="isInPath('2At-Staircase','NU_02B26')"/>
            <Line :status="getStatus('2At-Staircase')" :rotate="13" :height="54" :left="458" :top="656" :width="2"
                v-show="isInPath('2At-Staircase','NU_02B26')"/>
        </div>

    </div>
</template>

<script>
import Line from '../components/line.vue'

export default {
    name: 'SecondRoutes',
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
