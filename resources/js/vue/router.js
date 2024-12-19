import { createMemoryHistory, createRouter } from 'vue-router'

import List from './components/ListComponent.vue';

const routes = [
    {
        name: 'postsList',
        path: '/',
        component: List
    }
]

const router = createRouter({
    history: createMemoryHistory(),
    routes,
})

export default router
