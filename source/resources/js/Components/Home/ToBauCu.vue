<script setup>
import img1 from '../../../images/tranh-bau-cu-phat-hanh/zip/1.jpg'
import img2 from '../../../images/tranh-bau-cu-phat-hanh/zip/3.jpg'
import img3 from '../../../images/tranh-bau-cu-phat-hanh/zip/9.jpg'
import img4 from '../../../images/tranh-bau-cu-phat-hanh/zip/22.jpg'
import img5 from '../../../images/tranh-bau-cu-phat-hanh/zip/35.jpg'
import img6 from '../../../images/tranh-bau-cu-phat-hanh/zip/32.jpg'
import img7 from '../../../images/tranh-bau-cu-phat-hanh/zip/11.jpg'
import img8 from '../../../images/tranh-bau-cu-phat-hanh/zip/16.jpg'
import img9 from '../../../images/tranh-bau-cu-phat-hanh/zip/20.jpg'
import img10 from '../../../images/tranh-bau-cu-phat-hanh/zip/4.jpg'
import {ref} from "vue";

const imgItems = [img1, img2, img3, img4, img5, img6, img7, img8, img9, img10]
const selectedIndex = ref(0)
setInterval(() => {
    if (selectedIndex.value === 9)
        selectedIndex.value = 0
    else
        selectedIndex.value++
}, 8000)
</script>

<template>
    <v-container class="d-flex flex-column h-100 justify-center">
        <div class="header-content">
            <div class="header-content__item bg-teal header-content__item--left">
                <v-icon class="mr-2">mdi-home-map-marker</v-icon>
                Có 10 Tổ bầu cử
            </div>

            <div class="header-content__item bg-teal header-content__item--right">
                <v-icon class="mr-2">mdi-account-group-outline</v-icon>
                50 Đại biểu được bầu
            </div>
        </div>

        <v-sheet class="flex-0-1  content">
            <v-list class="content__list justify-center">
                <v-list-item v-for="i of 10" class="w-33">
                    <v-card class="content__card bg-quoc-huy">
                        <v-card-title class="bg-transparent text-center  text-red font-weight-bold border-b">
                            <v-icon class="float-left">mdi-map-marker-radius</v-icon>
                            <h3 class="text-cart-title"> Đơn vị bầu cử số {{ i }}</h3>
                        </v-card-title>
                        <v-card-text class="py-2  d-flex flex-column ">
                            <div class="d-flex">
                                <div class="ml-2 flex-grow-1">
                                    <ul class="card-content__list">
                                        <li v-for="j of 3"><h6 class="text-center">Khóm {{ j }}</h6></li>
                                    </ul>
                                </div>
                            </div>
                            <h6 class="text-teal text-center"> Số đại biểu HĐND được bầu là 3</h6>
                        </v-card-text>
                    </v-card>
                </v-list-item>
            </v-list>
            <div class="content__img">
                <v-carousel hide-delimiters :show-arrows="false" v-model="selectedIndex">
                    <v-carousel-item v-for="(item,i) of imgItems" :src="item" :key="i"></v-carousel-item>
                </v-carousel>
            </div>
        </v-sheet>
    </v-container>
</template>

<style scoped>
.header-content {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: calc(1.2rem + 0.5vw);
    margin-bottom: calc(15px + 0.2vh);
}

.header-content__item {
    padding: 20px;
    display: flex;
    align-items: center;
    color: white;
    border-bottom: 3px solid var(--root-color);
    text-shadow: 2px 0 5px #0d47a1;
}

.header-content__item--right {
    border-radius: 0 50px 50px 0;
}

.header-content__item--left {
    border-radius: 50px 0 0 50px;
}

.bg-card-title {
    background-image: linear-gradient(10deg, #FFFAE8 10.67%, #FFE68D 64.88%, #FFDC9B 84.26%);
}

.card-content__list {
    list-style: none;
}

.bg-quoc-huy {
    background-image: url("../../../images/logo-quoc-huy-op-12.png");
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}

li {
    color: var(--root-color);
}

.v-card h3 {
    font-size: calc(0.9rem + 0.4vw);
}

.v-card h6 {
    font-size: calc(0.6rem + 0.4vw);
}

.text-cart-title {
    text-shadow: 0 2px 5px #fff;
}

.content {
    display: flex;
    height: 100%;
    overflow: hidden;
}

.content__list {
    height: 100%;
    width: 70%;
    display: flex;
    flex-wrap: wrap;
    overflow: auto;
}

.content__card {
    border: 1px solid #ccc;
    transform: scale(0.95);
    transition: all 0.2s ease-in-out;
    cursor: pointer;
}

.content__card:hover {
    border-color: rgb(217, 9, 1);
    transform: scale(1);
}

.content__img {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}
.content__img .v-carousel{
    height: 100%!important;
}
.content__img img {
    width: 100%;
}
</style>
