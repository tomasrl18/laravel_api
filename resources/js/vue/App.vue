<template>
    <div class="app-container">
        <o-field>
            <h1>Principal</h1>
        </o-field>
        <List />
    </div>
</template>

<script>
    import List from './components/ListComponent.vue'

    export default {
        components: {
            List
        }
    }
</script>

<style>
.app-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}
</style>
