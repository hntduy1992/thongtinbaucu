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


const dvbc = [
    {
        name: 'Đơn vị bầu cử số 1',
        list: ['Khóm Hòa Khánh', 'Khóm Hòa An', 'Khóm Kiến An'],
        file: '/files/banbaucuso01_signed.pdf'
    },
    {name: 'Đơn vị bầu cử số 2', list: ['Khóm Phú Mỹ', 'Khóm Vĩnh Hòa'], file: '/files/banbaucuso02_signed.pdf'},
    {name: 'Đơn vị bầu cử số 3', list: ['Khóm Cái Sơn', 'Khóm Vĩnh Phước'], file: '/files/banbaucuso03_signed.pdf'},
    {
        name: 'Đơn vị bầu cử số 4',
        list: ['Khóm Cầu Đình', 'Khóm Tân Bình', 'Khóm Tân An'],
        file: '/files/banbaucuso04_signed.pdf'
    },
    {name: 'Đơn vị bầu cử số 5', list: ['Khóm Tân Thuận', 'Khóm Sa Giang', 'Khóm Tân Hòa'], file: '/files/banbaucuso05_signed.pdf'},
    {name: 'Đơn vị bầu cử số 6', list: ['Khóm Tân Lợi', 'Khóm Tân Thành', 'Khóm Tân Lập'], file: '/files/banbaucuso06_signed.pdf'},
    {name: 'Đơn vị bầu cử số 7', list: ['Khóm Cái Đôi', 'Khóm Tân Hưng', 'Khóm Tân Quy', 'Tân Long'], file: '/files/banbaucuso07_signed.pdf'},
    {name: 'Đơn vị bầu cử số 8', list: ['Khóm Vườn Hồng', 'Khóm Tân Mỹ', 'Khóm Sa Nhiên','Khóm Tân Hiệp'], file: '/files/banbaucuso08_signed.pdf'},
    {name: 'Đơn vị bầu cử số 9', list: ['Khóm Khánh Hòa', 'Khóm Đông Quới', 'Khóm Khánh Nhơn'], file: '/files/banbaucuso09_signed.pdf'},
    {name: 'Đơn vị bầu cử số 10', list: ['Khóm Khánh Nghĩa', 'Khóm Đông Huề', 'Khóm Đông Khánh','Khóm Đông Giang'], file: '/files/banbaucuso10_signed.pdf'},
]
</script>

<template>
    <v-container class="d-flex flex-column h-100 justify-center">
        <div class="header-content">
            <div class="header-content__item bg-teal header-content__item--left">
                <v-icon class="mr-2">mdi-home-map-marker</v-icon>
                <span>10 Đơn vị bầu cử</span>
            </div>

            <div class="header-content__item bg-teal header-content__item--right">
                <v-icon class="mr-2">mdi-account-group-outline</v-icon>
                <span>50 Đại biểu được bầu</span>
            </div>
        </div>

        <v-sheet class="flex-0-1  content-tbc">
            <v-list class="content-tbc__list ">
                <v-list-item v-for="i of dvbc" class="content-tbc__list-item" link :href="i.file">
                    <v-card class="content-tbc__card bg-quoc-huy">
                        <v-card-title class="bg-transparent text-center  text-red font-weight-bold border-b">
                            <v-icon class="float-left icon-card-title">mdi-map-marker-radius</v-icon>
                            <h3 class="text-cart-title"> {{ i.name }}</h3>
                        </v-card-title>
                        <v-card-text class="py-2  d-flex flex-column ">
                            <div class="d-flex">
                                <div class="ml-2 flex-grow-1">
                                    <ul class="card-content__list">
                                        <li v-for="j of i.list"><h6 class="text-center">{{ j }}</h6></li>
                                    </ul>
                                </div>
                            </div>
                            <h6 class="text-teal text-center"> Số đại biểu HĐND được bầu là 3</h6>
                        </v-card-text>
                    </v-card>
                </v-list-item>
            </v-list>
            <div class="content-tbc__img">
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
    min-height: 80px;
    display: flex;
    flex-direction: column;
    justify-content: center;
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

.content-tbc__card .v-card-title,
.content-tbc__card h3 {
    font-size: calc(0.7rem + 0.1vw);
}


.v-card h6 {
    font-size: calc(0.6rem + 0.4vw);
}

.text-cart-title {
    text-shadow: 0 2px 5px #fff;
}

.content-tbc {
    display: flex;
    height: 100%;
    overflow: hidden;
    position: relative;
}

.content-tbc__list {
    height: 100%;
    width: 70%;
    display: flex;
    flex-wrap: wrap;
    overflow: auto;
    justify-content: center;
}

.content-tbc__card {
    border: 1px solid #ccc;
    transform: scale(0.95);
    transition: all 0.2s ease-in-out;
    cursor: pointer;
}
.content-tbc__card:hover {
    border-color: rgb(217, 9, 1);
    transform: scale(1);
}

.content-tbc__img {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content-tbc__img .v-carousel {
    height: 100% !important;
}

.content-tbc__img img {
    width: 100%;
}

.content-tbc__list-item {
    width: 33.33%;
}

@media (max-width: 768px) {
    .header-content {
        font-size: calc(1rem + 0.2vw);
    }

    .header-content__item {
        flex: 1;
        border-radius: 0;

    }
    .content-tbc{
        overflow: unset;
    }
    .content-tbc__card .v-card-title,
    .content-tbc__card h3 {
        font-size: 0.8rem;
    }

    .content-tbc__list {
        width: 100%;
    }

    .card-content__list {
        list-style: none;
        min-height: 80px;
    }

    .content-tbc__list-item {
        width: 50%;
        background-color: transparent;
        z-index: 1;
    }

    .content-tbc__img {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0.2;
        z-index: 0;
    }
}

@media (max-width: 576px){
    .header-content__item{
        font-size: 1rem;
        position: relative;
        display: flex;
        justify-content: center;

    }
    .header-content__item .v-icon{
        position: absolute;
        z-index: 0;
        color: green;
        left: 50%;
        transform: translateX(-50%);
        font-size: 3rem;
    }
    .header-content__item span{
        z-index: 1;
    }
}
</style>
