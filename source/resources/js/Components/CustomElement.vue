<script setup>
import {computed} from "vue";

const props = defineProps({
    topAside: false,
    oneScreen: false
})

</script>

<template>
    <aside :class="{'top-aside':topAside, 'one-screen':oneScreen}">
        <slot></slot>
    </aside>
</template>

<style scoped>
aside {
    min-height: 100vh;
}

.top-aside {
    height: calc(100vh - 200px);
    min-height: unset;
    padding-top: 0;
    overflow: hidden;
}
.one-screen{
    height: 100vh;
}
@media (max-width: 768px) {
    aside {
        height: unset;
    }

    .top-aside {
        min-height: calc(100vh - 118px);
    }
}

@media (max-width: 576px) {
    .top-aside {
        min-width: unset;
        height: calc(100vh - 64px);
    }
}
</style>
