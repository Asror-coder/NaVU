<template>
    <button @click="onClick()" :style="{ background: color, color: textColor}"
        class="p-3 text-lg hover:bg-gray-400 focus:outline-none mb-1">
        {{text}}
    </button>
</template>

<script>
export default {
    name: 'Button',
    props: {
        text: String,
        color: String,
        textColor: String,
    },
    methods: {
        onClick() {
            this.$emit('btn-click', this.text);
        }
    }
}
</script>
