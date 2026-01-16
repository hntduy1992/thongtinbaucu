<script setup>
import dayjs from "dayjs";
import {onMounted, ref} from "vue";

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
</script>

<template>
    <div class="content-wrap">
        <div class="title-page"><span>CHÀO MỪNG</span> <br>
            <h3 class="text-content">ĐẠI HỘI ĐẠI BIỂU TOÀN QUỐC LẦN THỨ XIV CỦA ĐẢNG</h3></div>
        <h3 class="text-center mb-4">NGÀY BẦU CỬ</h3>
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

        <div class="title-bottom">
            <img class="img-left" src="../../../images/chim-lac.png" alt="chim-lac">
            <span>ĐOÀN KẾT - DÂN CHỦ - KỶ CƯƠNG - ĐỘT PHÁ - PHÁT TRIỂN</span>
            <img class="img-right" src="../../../images/chim-lac.png" alt="chim-lac">
        </div>
    </div>
</template>

<style scoped>
.content-wrap {
    background-position: top;
    background-size: auto;
}


.title-page {
    font-size: 26pt;
    font-family: 'Times New Roman', sans-serif;
    text-align: center;
    font-weight: bold;
    color: #e60000;
    letter-spacing: 2px;
    margin-bottom: 100px;
    text-transform: uppercase;
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
</style>
