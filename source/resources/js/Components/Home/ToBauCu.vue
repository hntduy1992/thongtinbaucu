<script setup>

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
        <div class="flex-0-1 pt-2">
            <v-row class="justify-center">
                <v-col v-for="i of 10" md="3" sm="4" cols="6">
                    <v-card elevation="4">
                        <v-card-title class="bg-card-title text-center  text-red font-weight-bold border-b">
                            <v-icon class="float-left">mdi-map-marker-radius</v-icon>
                            <h3 class="text-cart-title"> Đơn vị bầu cử số {{ i }}</h3>
                        </v-card-title>
                        <v-card-text class="py-2  d-flex flex-column bg-quoc-huy">
                            <h3 class="font-weight-bold text-decoration-underline text-center">Gồm các khóm</h3>
                            <div class="d-flex">
<!--                                <img src="../../../images/bo-phieu.png" class="w-md-33 w-sm-25" alt="">-->
                                <div class="ml-2 flex-grow-1">
                                    <ul class="card-content__list">
                                        <li  v-for="j of 3"><h6 class="text-center">Khóm {{ j }}</h6></li>
                                    </ul>
                                </div>
                            </div>
                            <h6 class="text-teal text-center"> Số đại biểu HĐND được bầu là 10</h6>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>

        </div>
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
}

li {
    color: var(--root-color);
}

.v-card h3{
    font-size: calc(0.9rem + 0.4vw);
}
.v-card h6{
    font-size: calc(0.6rem + 0.4vw);
}
.text-cart-title{
    text-shadow: 0 2px 5px #fff;
}
</style>
