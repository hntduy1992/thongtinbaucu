<script setup>
import DefaultHeader from "./Default/DefaultHeader.vue";
import {onMounted, onUnmounted, ref} from "vue";
import DefaultFooter from "./Default/DefaultFooter.vue";
import {Link, router} from "@inertiajs/vue3";

const isHidden = ref(false);

const handleScroll = () => {
    // Lấy giá trị cuộn trang (hỗ trợ đa trình duyệt)
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    isHidden.value = scrollTop > 50;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
const drawer = ref(true)
const links = [
    {text: 'TRANG CHỦ', href: '#home'},
    {text: 'TỔ BẦU CỬ', href: '#to-bau-cu'},
]

const closeDrawer = () => {
    const dw = document.getElementById('drawer-toggle')
    dw.checked = false
}
</script>

<template>
    <div class="d-flex flex-column ">
        <input id="drawer-toggle" type="checkbox">
        <DefaultHeader id="home">
            <label for="drawer-toggle" class="ml-3">
                <v-icon>mdi-menu</v-icon>
            </label>
        </DefaultHeader>
        <v-list id="drawer" class="bg-drawer" @click="closeDrawer">
            <v-list-item link v-for="link of links" :href="link.href"
                         @click="closeDrawer" class="text-red">{{ link.text }}
            </v-list-item>
        </v-list>
        <label id="drawer-overlay" for="drawer-toggle"></label>
        <div class="flex-grow-1 main-content">
            <v-container class="pa-0">
                <slot></slot>
            </v-container>
        </div>
        <DefaultFooter></DefaultFooter>
    </div>
    <div class="go-home" :class="{'go-home__hide': isHidden}">
        <v-btn icon="mdi-home" color="primary" href="#home"></v-btn>
    </div>

</template>

<style scoped>

.go-home {
    display: none;
    position: fixed;
    bottom: 50px;
    right: 50px;
    z-index: 10;
}

.go-home.go-home__hide {
    display: block;
}

#drawer-overlay {
    display: none;
}

#drawer-toggle {
    display: none;
}

#drawer {
    display: none;
}

@media (max-width: 576px) {
    .fix-nav {
        display: none !important;
    }

    .bg-app-bar {
        background-image: url('../../images/trong-dong-header.png'), linear-gradient(97deg, #FFE68D 4.88%, #FFFEFC 29.3%, #FFFAE8 57.67%, #FFDC9B 84.26%);
        background-position: left center;
        background-repeat: no-repeat;
        background-size: auto 100%;
        color: red;
        text-shadow: 2px 2px 0px #eee;
    }

    .bg-app-bar::after {
        position: absolute;
        top: -10px;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        background-image: url('../../images/bg-header-right.png');
        background-position: center right;
        background-repeat: no-repeat;
        background-size: auto 100%;
        z-index: -1;
    }

    #drawer {
        display: block;
        position: fixed;
        top: 0;
        left: -250px; /* Đẩy menu sang trái hoàn toàn */
        width: 250px;
        height: 100%;
        transition: all 0.3s ease; /* Hiệu ứng mượt mà */
        z-index: 100;
        font-weight: bold;
    }

    #drawer-toggle:checked ~ #drawer {
        left: 0; /* Đưa menu về vị trí 0 */
    }

    #drawer-toggle:checked ~ #drawer-overlay {
        display: block;
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        z-index: 99;
    }
    .bg-drawer{
        background-image: url("../../images/TrongDong-bgcontent.png");
        background-size:cover;
    }
}

@media (max-width: 576px){
    .go-home{
        bottom: 25px;
        right: 25px;
    }
}

</style>
