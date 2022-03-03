<template>
    <div class="flex flex-col h-screen">
        <div class="flex-none flex justify-center p-6 text-4xl">
            <span class="text-na">NA</span><span class="text-vu">VU</span>
        </div>

        <nav>
            <div class="flex-none grid grid-cols-4 gap-4">
                <div class="col-span-1">
                    <Menu/>
                </div>
                <div class="col-span-2">
                    <router-view></router-view>
                </div>
                <div class="col-span-3"></div>
            </div>
        </nav>

        <div class="flex-grow"></div>

        <div class="flex-none flex flex-row justify-center p-6 text-xl">
            <div class="text-na">Asror Akbarkhodjaev</div>
            <div class="text-vu ml-1">2021</div>
        </div>
    </div>
</template>

<script>
import Menu from './Menu/Menu.vue'
import Map from './Map/Map.vue'
import Nodes from './Nodes/Nodes.vue'
import Admin from './Admin/Admin.vue'

export default {
    components: {
        Menu,
        Map,
        Nodes,
        Admin
    }
}
</script>
