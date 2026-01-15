<script setup>
const props = defineProps({
    topAside: false
})
</script>

<template>
    <aside class="h-screen bg-red" :class="{'top-aside':topAside}">
        <slot></slot>
    </aside>
</template>

<style scoped>
.top-aside {
    height: calc(100vh - 50px);
}
</style>
