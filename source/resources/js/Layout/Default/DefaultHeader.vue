<script setup>
import {Link, usePage} from '@inertiajs/vue3';
import NavItem from "./NavItem.vue";
const props = defineProps({
    links: Object
})


window.onscroll = function () {
    scrollFunction()
};

const page = usePage();

function scrollFunction() {
    const scroll = document.body.scrollTop
    var navbar = document.getElementById("navbar");
    var headerTop = document.getElementById("headerTop");
    if (scroll >= headerTop.clientHeight) {
        headerTop.visible = false;
    } else {
        headerTop.visible = true;
    }
}

</script>

<template>
    <header class="main-header ">
        <div class="d-none d-sm-block">
            <div id="headerTop" class="header-top ">
                <div class="content-header d-flex justify-center">
                    <img src="../../../images/logo-quoc-huy.png" class="img-fluid" alt="">
                    <div class="content-title">
                        <h3> ỦY BAN BẦU CỬ PHƯỜNG SA ĐÉC</h3>
                        <h2>BẦU CỬ ĐẠI BIỂU QUỐC HỘI KHÓA XVI &</h2>
                        <h2>ĐẠI BIỂU HỘI ĐỒNG NHÂN DÂN CÁC CẤP NHIỆM KỲ 2026 - 2031</h2>
                    </div>
                </div>
            </div>
            <div id="navbar" class="navbar d-none  d-sm-block">
                <v-container class="pa-0 ">
                    <ul class="menu-root">
                        <NavItem v-for="link of links" :item="link"></NavItem>
                    </ul>

                    <div v-if="page.props.auth" class="user-control">
                        <v-menu>
                            <template v-slot:activator="{ props }">
                                <span
                                    v-bind="props"
                                >
                                    {{ page.props.auth.user.name }}
                                </span>
                            </template>
                            <v-list v-if="page.props.auth.is_admin">
                                <v-list-item href="/hoi-dap" link>
                                    Hỏi đáp
                                </v-list-item>
                            </v-list>
                        </v-menu>
                        <Link href="/logout" class="logout-button">Logout</Link>
                    </div>
                </v-container>

            </div>
        </div>
        <div class=" d-block d-sm-none ">
            <v-toolbar color="red" id="toolbar">
                <slot></slot>
                <v-toolbar-title>ỦY BAN BẦU CỬ PHƯỜNG SA ĐÉC</v-toolbar-title>
            </v-toolbar>
        </div>
    </header>
</template>

<style scoped>
.header-top {
    background-image: url('../../../images/trong-dong-header.png'), linear-gradient(97deg, #FFE68D 4.88%, #FFFEFC 29.3%, #FFFAE8 57.67%, #FFDC9B 84.26%);
    background-position: left center;
    background-repeat: no-repeat;
    background-size: auto 100%;
    padding-top: 15px;
    padding-bottom: 15px;
    position: relative;
    transition: 0.3s;
    height: 150px;
}

.content-header {
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content-header img {
    width: 100px;
    margin-right: 20px;
}

.content-title {
    display: flex;
    flex-direction: column;
    justify-content: center;
    line-height: 1.2;
    z-index: 1;
    text-shadow: 2px 2px 2px white;
}

.content-header h3 {
    color: #2f2f2d;
}

.content-header h2 {
    font-weight: bold;
    color: rgb(107, 46, 3);
}

.header-top::after {
    position: absolute;
    top: -10px;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    background-image: url('../../../images/bg-header-right.png');
    background-position: center right;
    background-repeat: no-repeat;
    background-size: auto 100%;
}

.main-header .navbar {
    background: rgb(217, 9, 1);
    color: white;
    position: relative;
    display: flex;
    align-items: center;
}
/* nav menu */
.menu-root{
    display: flex;
    justify-content: center;
    list-style-type: none;
}
/* nav menu */

.user-control {
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

.logout-button {
    text-decoration: none;
    color: white;
    margin-left: 10px;
}


@media (max-width: 768px) {
    .header-top {
        height: 5rem;
        padding: 0;
    }

    .content-title {
        font-size: 0.6rem;
    }

    .content-header img {
        max-width: 4rem;
    }
}

@media (max-width: 375px) {

    .v-toolbar-title {
        font-size: 0.9rem;
    }
}
</style>
