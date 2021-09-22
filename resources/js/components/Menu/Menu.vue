<template>
    <div class="flex-none grid grid-cols-4">
        <div></div>
        <div class="flex flex-col col-span-2">
            <!-- Map -->
            <Button @btn-click="menuClick"
                :text="'Map'"
                :color="showMap ? '#33ADE8' : '#EAEAEA'"
                :textColor="showMap ? 'white' : 'black'"/>

            <!-- Nodes -->
            <Button @btn-click="menuClick"
                :text="'Nodes'"
                :color="showNodes ? '#33ADE8' : '#EAEAEA'"
                :textColor="showNodes ? 'white' : 'black'"/>

            <!-- Admin -->
            <Button @btn-click="menuClick"
                :text="'Admin'"
                :color="showAdmin ? '#33ADE8' : '#EAEAEA'"
                :textColor="showAdmin ? 'white' : 'black'"/>

            </div>
        <div></div>
    </div>
</template>

<script>
import Button from './Button.vue'

export default {
    name: 'Clubs',
    components: {
        Button
    },
    data() {
        return {
            currentPage: 'Map',
            showMap: true,
            showNodes: false,
            showAdmin: false
        }
    },
    methods: {
        menuClick(newPage) {
            if (newPage != this.currentPage) {
                if (newPage == 'Map') {
                    this.showMap = true
                    this.showNodes = false
                    this.showAdmin = false
                }
                else if (newPage == 'Nodes') {
                    this.showMap = false
                    this.showNodes = true
                    this.showAdmin = false
                }
                else if (newPage == 'Admin') {
                    this.showMap = false
                    this.showNodes = false
                    this.showAdmin = true
                }

                this.currentPage = newPage
                this.$emit('change-page', newPage)
            }
        }
    }
}
</script>
