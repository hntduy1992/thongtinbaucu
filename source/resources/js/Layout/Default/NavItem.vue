<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    item: Object
})
</script>

<template>
    <li class="menu-item ">
        <template v-if="item.children">
            <span>{{ item.text }}</span>
            <ul class="menu">
                <NavItem v-for="link of item.children" :item="link"></NavItem>
            </ul>
        </template>
        <template v-else>
            <Link v-if="item.href" :href="item.href">
                <v-icon v-if="item.icon">{{ item.icon }}</v-icon>
                <span v-else>{{ item.text }}</span>
            </Link>
            <a v-else :href="item.file" target="_blank">
                <span >{{ item.text }}</span>
            </a>
        </template>
    </li>
</template>

<style scoped>
.menu-item {
    position: relative;
    background: rgb(217, 9, 1);
    display: flex;
    align-items: center;
    padding: 10px;
}

.menu-item i {
    color: white;
}

.menu-item i:hover {
    transform: scale(1.3);
}

.menu-item span {
    display: block;
    min-width: 100px;
    text-align: center;
    color: white;
    text-wrap: nowrap;
    border-bottom: 2px solid transparent;
    padding: 5px;
    transition: all 0.3s ease-in-out;
}

.menu-item span:hover {
    border-bottom: 2px solid white;
}

.menu-item a {
    text-wrap: nowrap;
    text-decoration: none;
}

.menu {
    list-style-type: none;
    position: absolute;
    top: 0;
    transition: all 0.3s ease-in-out;
    padding-top: 10px;
    margin-top: -10px;
    z-index: 2;
    visibility: hidden;
    opacity: 0;
}

.menu-item:hover > .menu {
    top: 100%;
    visibility: visible;
    opacity: 1;
}

.menu-item:hover .menu .menu-item:hover .menu {
    left: 100%;
    top: 0;
}
.menu .menu-item{
    display: flex;
    justify-content: center;
}
</style>
