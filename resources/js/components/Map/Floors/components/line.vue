<template>
    <div :class="setStyle()" :style="setPosition()"></div>
</template>

<script>
export default {
    name: 'Line',
    props: {
        status: null,
        rotate: null,
        height: null,
        top: null,
        left: null,
        width: null
    },
    methods: {
        setStyle() {
            var style = "w-" + this.width

            switch(this.status) {
                case 1:
                    style += " bg-safeWalk"
                    break;
                case 2:
                    style += " bg-semiSafeWalk"
                    break;
                case 3:
                    style += " bg-safeStay"
                    break;
                case 4:
                    style += " bg-semiSafeStay"
                    break;
                case 5:
                    style += " bg-notSafe"
                    break;
                case 6:
                    style += " bg-crowded"
                    break;
                case 7:
                    style += " bg-gray-700"
                    break;
                case 8:
                    style += " bg-white"
                    break;
                default:
                    style += " bg-blue-400"
            }

            return style;
        },
        setPosition() {
            return "position: absolute; top: "+this.top+"px;"+" left: "+this.left+"px;"+" height: "+this.height+"px;"
                    +" transform: rotate(" + this.rotate + "deg);"
        }
    }
}
</script>
