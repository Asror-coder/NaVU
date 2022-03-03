import { createWebHistory, createRouter } from "vue-router";
import Map from "../components/Map/Map.vue";
import Nodes from "../components/Nodes/Nodes.vue";
import Admin from "../components/Admin/Admin.vue";

const routes = [
    {
        path: "/:pathMatch(.*)*",
        name: 'NotFound',
        component: () => import('../components/NotFound.vue')
    },
    {
        path: "/",
        name: "Map",
        component: Map,
    },
    {
        path: '/nodes',
        name: 'Nodes',
        component: Nodes,
    },
    {
        path: '/admin',
        name: 'Admin',
        component: Admin,
    }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
