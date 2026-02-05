<script setup>
import dayjs from "dayjs";
import {onMounted, ref} from "vue";
import imgBannerSaDec from '../../../images/banner-ban-chi-dao-sa-dec.jpg'
import img1 from '../../../images/tranh-bau-cu-phat-hanh/zip/14.jpg'
import img2 from '../../../images/tranh-bau-cu-phat-hanh/zip/19.jpg'
import img3 from '../../../images/tranh-bau-cu-phat-hanh/zip/15.jpg'
import img4 from '../../../images/tranh-bau-cu-phat-hanh/zip/25.jpg'
import img5 from '../../../images/tranh-bau-cu-phat-hanh/zip/31.jpg'
import img6 from '../../../images/tranh-bau-cu-phat-hanh/zip/34.jpg'

const targetDate = dayjs('2026-03-15 00:00:00')

const countdown = ref({
    days: 0,
    hours: 0,
    minutes: 0,
    seconds: 0,
})

const setCoutdown = () => {
    const now = Date.now()
    countdown.value.days = targetDate.diff(now, 'day')
    countdown.value.hours = targetDate.diff(dayjs(now).add(countdown.value.days, 'day'), 'hour')
    countdown.value.minutes = targetDate.diff(dayjs(now).add(countdown.value.days, 'day').add(countdown.value.hours, 'hour'), 'minute')
    countdown.value.seconds = targetDate.diff(dayjs(now).add(countdown.value.days, 'day').add(countdown.value.hours, 'hour').add(countdown.value.minutes, 'minute'), 'second')
}
setInterval(() => {
    setCoutdown()
}, 1000)

const carousel = ref(0)
setInterval(() => {
    if (carousel.value>=5)
        carousel.value = 0
    else
        carousel.value++
}, 10000)
</script>

<template>
    <v-container class="content-wrap">
        <div class="content-wrap__background">
            <div class="img"><img src="../../../images/trong-dong/trongdong-1.png" alt="trong-dong"></div>
            <div class="img"><img class="rotate-right" src="../../../images/trong-dong/trongdong-2.png"
                                  alt="trong-dong"></div>
            <div class="img"><img class="rotate-left" src="../../../images/trong-dong/trongdong-3.png" alt="trong-dong">
            </div>
            <div class="img"><img class="rotate-right" src="../../../images/trong-dong/trongdong-4.png"
                                  alt="trong-dong"></div>
            <div class="img"><img class="rotate-right" src="../../../images/trong-dong/trongdong-5.png"
                                  alt="trong-dong"></div>
            <div class="img"><img class="rotate-left" src="../../../images/trong-dong/trongdong-6.png" alt="trong-dong">
            </div>
            <div class="img"><img class="rotate-right" src="../../../images/trong-dong/trongdong-7.png"
                                  alt="trong-dong"></div>
            <div class="img"><img src="../../../images/trong-dong/trongdong-8.png" alt="trong-dong"></div>
        </div>
        <v-row>
            <v-col md="3" class="d-none d-md-flex flex-column justify-center align-center">
                <ul class="list-banner">
                    <li class="banner-item">
                        <a href="https://dongthap.gov.vn//documents/1527809/5217035/06-QDTU_dadongdau%20(1)_20260110113555.pdf/33340006-b145-586b-b08b-54831ddee80f">
                            <v-img
                                src="https://dongthap.gov.vn/documents/1527809/6876490/banchidaobaucu.jpg/9cc6dad9-3a6b-acbc-5622-d46c8c053fc1?version=1.0&t=1767687284381"></v-img>
                        </a>
                    </li>
                    <li class="banner-item">
                        <a href="/files/uybanbaucu.pdf">
                            <v-img :src="imgBannerSaDec"></v-img>
                        </a>
                    </li>
                </ul>
                <v-carousel v-model="carousel" style="height: unset" hide-delimiters :show-arrows="false">
                    <v-carousel-item :src="img1"></v-carousel-item>
                    <v-carousel-item :src="img2"></v-carousel-item>
                    <v-carousel-item :src="img3"></v-carousel-item>
                    <v-carousel-item :src="img4"></v-carousel-item>
                    <v-carousel-item :src="img5"></v-carousel-item>
                    <v-carousel-item :src="img6"></v-carousel-item>
                </v-carousel>
            </v-col>
            <v-col md="6" class="d-flex align-center justify-center">
                <div class="page-content">
                    <div class="d-none page-content__title">
                        <div class="content-title">
                            <h2>BẦU CỬ ĐẠI BIỂU QUỐC HỘI KHÓA XVI</h2>
                            <h2>& ĐẠI BIỂU HỘI ĐỒNG NHÂN DÂN CÁC CẤP NHIỆM KỲ 2026 - 2031</h2>
                        </div>
                    </div>

                    <div class="count-down__header">NGÀY BẦU CỬ</div>
                    <div class="countdown-container">

                        <div class="time-section">
                            <span id="days">{{ countdown.days }}</span>
                            <p>Ngày</p>
                        </div>
                        <div class="time-section">
                            <span id="hours">{{ countdown.hours }}</span>
                            <p>Giờ</p>
                        </div>
                        <div class="time-section">
                            <span id="minutes">{{ countdown.minutes }}</span>
                            <p>Phút</p>
                        </div>
                        <div class="time-section">
                            <span id="seconds">{{ countdown.seconds }}</span>
                            <p>Giây</p>
                        </div>
                    </div>
                </div>
            </v-col>
            <v-col md="3" class="d-none d-md-flex align-center">
                <img class="w-100 content__page--img-left" src="../../../images/tranh-bau-cu-phat-hanh/zip/33.jpg"
                     alt="count-down-left">
            </v-col>
        </v-row>
    </v-container>
</template>

<style scoped>
.list-banner{
    width: 100%;
    list-style-type: none;
}
.banner-item{
    margin-bottom: 12px;
    transform: scale(0.98);
    transition: all 0.3s;
}
.banner-item:hover{
    transform: scale(1);
    box-shadow: 2px 2px 5px #ccc;
}
.content-wrap {
    background-position: top;
    background-size: auto;
    position: relative;
    overflow: hidden;
}

.content-wrap__background .img,
.content-wrap__background {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%) scale(0.7);
    z-index: -1;
    opacity: 0.5;
}

.rotate-left {
    animation: rotate-go-left 60s linear infinite;
}

.rotate-right {
    animation: rotate-go-right 60s linear infinite;
}

/* Định nghĩa chuyển động quay */
@keyframes rotate-go-left {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

@keyframes rotate-go-right {
    from {
        transform: rotate(360deg);
    }
    to {
        transform: rotate(0deg);
    }
}

.title-page {
    font-size: 22pt;
    font-family: 'Times New Roman', sans-serif;
    text-align: center;
    font-weight: bold;
    color: #e60000;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.title-page span {
    position: relative;
}

.title-page .text-content {
    color: #e60000;
    font-weight: 900;
    margin: 0;
    line-height: 1.2;
    text-transform: uppercase;


    background: linear-gradient(to bottom, #ff0000 0%, #a50000 100%);
    -webkit-background-clip: text;
    position: relative;

    text-shadow: 2px 2px 0 rgba(255, 255, 255, 1),
    4px 4px 8px rgba(0, 0, 0, 0.2);

    -webkit-box-reflect: below -15px linear-gradient(transparent 20%, rgba(0, 0, 0, 0.15));
}

.page-content .count-down__header {

    color: rgb(107, 46, 3) !important;
    font-size: calc(20pt + 0.2vw);
    text-align: center;
    font-weight: bold;
    margin-bottom: 12px;
}

.title-bottom {
    font-size: 16pt;
    margin-top: 60px;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    font-weight: bold;

    /* Hiệu ứng màu chữ Gradient (Tùy chọn) */
    background: linear-gradient(to bottom, #ff4757, #b33939);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    text-transform: uppercase;
    letter-spacing: 4px;
    position: relative;
}

.title-bottom img {
    position: absolute;
    width: 150px;
    top: -50px;
}

.title-bottom .img-left {
    transform: rotate(-30deg);
    left: -100px;
}

.title-bottom .img-right {
    transform: rotateY(180deg) rotateZ(-30deg);
    right: -100px;
}

.content-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.countdown-container {
    display: flex;
    gap: 20px;
    text-align: center;
    justify-content: center;

}

.time-section {
    background-color: rgba(168, 103, 2, 0.3);
    padding: 20px;
    border-radius: 10px;
    width: 100px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    border: white solid 1px;
}

.time-section span {
    font-size: 3rem;
    font-weight: bold;
    display: block;
    color: #ff4757;
}

.time-section p {
    margin: 5px 0 0;
    text-transform: uppercase;
    font-size: 1rem;
    letter-spacing: 1px;
    color: white;
    font-weight: bold;
    text-shadow: red 2px 2px 5px;
}

@media (max-width: 576px) {
    .content-wrap__background .img,
    .content-wrap__background {
        z-index: 0;
    }

    .content-wrap__background {
        transform: scale(0.7);
    }

    .time-section {
        width: 75px;
    }

    .time-section span {
        font-size: 2rem;
    }

    .time-section p {
        font-size: 0.7rem;
    }

    .page-content__title {
        display: flex !important;
        text-align: center;
        margin-bottom: 20px;
        font-size: 0.7rem;
        color: red;
        text-shadow: 1px 1px 1px #fff, -1px -1px 1px #000;
    }

    .rotate-left {
        animation: rotate-go-left 120s linear infinite;
    }

    .rotate-right {
        animation: rotate-go-right 120s linear infinite;
    }
}

@media (max-width: 375px) {
    .time-section {
        width: 50px;
        padding: 10px;
    }

    .time-section span {
        font-size: 1rem;
    }

    .time-section p {
        font-size: 0.5rem;
    }
}
</style>
