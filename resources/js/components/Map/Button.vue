<template>
    <button @click="onClick()" :class="style"
        class="px-5 hover:text-blue-600 focus:outline-none mb-1 p-2 rounded-md shadow-md">
        {{text}}
    </button>
</template>

<script>
export default {
    name: 'Button',
    props: {
        text: String,
        style: String
    },
    methods: {
        onClick() {
            this.$emit('btn-click', this.text);
        }
    }
}
</script>
