<script setup>
import {Link} from '@inertiajs/vue3';

const links = [
    {text: 'TRANG CHỦ', href: '#home'},
    {text: 'TỔ BẦU CỬ', href: '#to-bau-cu'},
]


window.onscroll = function () {
    scrollFunction()
};

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
                    <ul class="menu">
                        <li v-for="item of links">
                            <Link :href="item.href">{{ item.text }}</Link>
                        </li>
                    </ul>
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

.menu {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 5px 0;
}

.menu a {
    color: white;
    text-decoration-line: none;
    padding: 5px;
    margin: 0 5px;

}

.menu li {
    border: 2px solid transparent;
    transition: all 0.3s ease-in-out;
}

.menu li:hover {
    color: yellow;
    cursor: pointer;
    border-bottom: 2px solid white;
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


</style>
