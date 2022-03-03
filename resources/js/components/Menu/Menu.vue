<template>
    <div class="flex-none grid grid-cols-4">
        <div></div>
        <div class="flex flex-col col-span-2">
            <!-- Map -->
            <Button @btn-click="menuClick"
                :text="'Map'"
                :color="this.$route.path == '/' ? '#33ADE8' : '#EAEAEA'"
                :textColor="this.$route.path == '/' ? 'white' : 'black'"/>

            <!-- Nodes -->
            <Button @btn-click="menuClick"
                :text="'Nodes'"
                :color="this.$route.path == '/nodes' ? '#33ADE8' : '#EAEAEA'"
                :textColor="this.$route.path == '/nodes' ? 'white' : 'black'"/>

            <!-- Admin -->
            <Button @btn-click="menuClick"
                :text="'Admin'"
                :color="this.$route.path == '/admin' ? '#33ADE8' : '#EAEAEA'"
                :textColor="this.$route.path == '/admin' ? 'white' : 'black'"/>

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
    methods: {
        menuClick(newPage) {
            if (newPage == 'Map')
                this.$router.push({name:'Map'})
            else if (newPage == 'Nodes')
                this.$router.push({name:'Nodes'})
            else if (newPage == 'Admin')
                this.$router.push({name:'Admin'})
        }
    }
}
</script>
