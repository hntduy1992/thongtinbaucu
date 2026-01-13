<script setup lang="ts">

</script>

<template>
    <header class="main-header">
        <div class="header-top">
            <v-container class="content">
                <img src="../../../images/logo-quoc-huy.png" class="img-fluid" alt="">
                <div class="content-title">
                    <h3> ỦY BAN BẦU CỬ PHƯỜNG SA ĐÉC</h3>
                    <h2>BẦU CỬ ĐẠI BIỂU QUỐC HỘI KHÓA XVI &</h2>
                    <h2>ĐẠI BIỂU HỘI ĐỒNG NHÂN DÂN CÁC CẤP NHIỆM KỲ 2026 - 2031</h2>
                </div>
            </v-container>
        </div>
        <div class="navbar">
            <v-container class="pa-0">
               <ul class="menu">
                   <li>TỔ BẦU CỬ</li>
                   <li>DANH SÁCH ỨNG CỬ</li>
                   <li>HỎI ĐÁP</li>
                   <li>HƯỚNG DẪN BỎ PHIẾU</li>
               </ul>
            </v-container>
        </div>
    </header>
</template>

<style scoped>
.header-top {
    background: linear-gradient(97deg, #FFE68D 4.88%, #FFFEFC 29.3%, #FFFAE8 57.67%, #FFDC9B 84.26%);
    background-image: url('../../../images/trong-dong-header.png'), linear-gradient(97deg, #FFE68D 4.88%, #FFFEFC 29.3%, #FFFAE8 57.67%, #FFDC9B 84.26%);
    background-position: left center;
    background-repeat: no-repeat;
    background-size: auto 100%;
    padding-top: 15px;
    padding-bottom: 15px;
    position: relative;
    transition: 0.3s;
}

.content {
    display: flex;
}

.content img {
    width: 100px;
}

.content-title {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left: 20px;
    line-height: 1.2;
}

.content h3 {
    color: #2f2f2d;
}

.content h2 {
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
    background-image: url('../../../images/bg-flag.png');
    background-position: center right;
    background-repeat: no-repeat;
    background-size: auto 100%;
}

.main-header .navbar {
    background: #A76700;
    padding: 4px 0;
    color: white;
}
.menu{
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 5px 0;
}
.menu li{
    transition: all 0.3s;
    padding: 5px;
    margin: 0 5px;
    border: 2px solid transparent;
}
.menu li:hover{
    color: yellow;
    cursor: pointer;
    border-bottom: 2px solid white;
}

</style>
