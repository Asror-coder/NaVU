<template>
    <button @click="onClick()" :class="textColor"
        class="px-3 hover:text-blue-600 focus:outline-none mb-1">
        {{ text }}
    </button>
</template>

<script>
export default {
    name: 'Button',
    props: {
        text: String,
        textColor: String
    },
    methods: {
        onClick() {
            this.$emit('btn-click', this.text);
        }
    }
}
</script>
