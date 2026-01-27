<script setup>
import {computed} from "vue";

const props = defineProps({
    topAside: false
})

</script>

<template>
    <aside :class="{'top-aside':topAside}">
        <slot></slot>
    </aside>
</template>

<style scoped>
aside {
    height: 100vh;
}

.top-aside {
    height: calc(100vh - 200px);
    padding-top: 0;
}
@media (min-width: 768px){
    aside{
        height: unset;
    }
    .top-aside{
        min-height: calc(100vh - 118px);
    }
}
</style>
