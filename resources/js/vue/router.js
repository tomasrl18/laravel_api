import { createMemoryHistory, createRouter } from 'vue-router'

const routes = [
    {
        name: 'postsList',
        path: '/',
        component: () => import('./components/ListComponent.vue')
    },
    {
        name: 'PostCreate',
        path: '/post/create',
        component: () => import('./components/Posts/CreateComponent.vue')
    },
    {
        name: 'PostEdit',
        path: '/post/edit/:id',
        component: () => import('./components/Posts/EditComponent.vue')
    },
    {
        name: 'PostDelete',
        path: '/post/delete/:id',
        component: () => import('./components/Posts/DeleteComponent.vue')
    }
]

const router = createRouter({
    history: createMemoryHistory(),
    routes,
})

export default router
