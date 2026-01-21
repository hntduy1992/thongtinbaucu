<script setup>

</script>

<template>
    <v-card class="wrap">
        <v-card-title>
            <h1 class=" text-center text-red mt-3">HỌ VÀ TÊN</h1>
        </v-card-title>
        <v-card-text class="content">
            <div class="left-content">
                <div class="img-wrap">
                    <img style="width: 100%" class="avatar" src="../../../images/hinhdaibieu/cach-chup-hinh-the-dep-590x800.jpeg" alt="image">
                </div>
            </div>
            <div class="right-content pl-5">
                <p>Sinh ngày: <b>11/1/2021</b></p>
                <p>Quê quán: <b>Sa Đéc, Đồng Tháp</b></p>
                <p>Trình độ chuyên môn: <b>Thạc sỹ Quản lý kinh tế</b></p>
                <p>Trình độ lý luận chính trị: <b>Cao cấp</b></p>
            </div>
        </v-card-text>
    </v-card>
</template>

<style scoped>
.wrap {
    background-image: url("../../../images/TrongDong-bgcontent.png");
    background-size: cover;
    background-position: left center;
    background-repeat: no-repeat;

}
.content{
    display: flex;
    justify-content: center;
    min-height: calc(100%*3/4);
    position: relative;
    margin: 20px;

}
.content:after{
    position: absolute;
    content: '';
    width: 4px;
    height: 100%;
    border-radius: 3px;
    background-color: var(--root-color);
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
}
.content .left-content,
.content .right-content{
    width: 50%;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;

}
.content .right-content{
    font-size: 26pt;
}
.content .left-content{
    align-items: center;
}
.content .left-content .img-wrap{
    width: 350px;
    height: 350px;
}

.img-wrap{
    border-radius: 50%;
    border: 3px solid var(--root-color);
    overflow: hidden;
    background-color: #00acc1;
}

.img-wrap img{
    width: 100%;
}
</style>
