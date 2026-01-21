<script setup>

import UngCuView from "./UngCuView.vue";
</script>

<template>
    <div class="content">
        <v-carousel hide-delimiters class="carousel" >
            <v-carousel-item class="w-75  carousel-item">
                <UngCuView></UngCuView>
            </v-carousel-item>
            <v-carousel-item class="w-75  carousel-item">
                <UngCuView></UngCuView>
            </v-carousel-item>
        </v-carousel>
        <v-list class="d-flex justify-center"  >
            <v-list-item >
                <div class="img-wrap">
                    <img src="https://smilemedia.vn/wp-content/uploads/2022/09/cach-chup-hinh-the-dep-590x800.jpeg"></img>
                </div>
            </v-list-item>
            <v-list-item >
                <div class="img-wrap">
                    <img src="https://smilemedia.vn/wp-content/uploads/2022/09/cach-chup-hinh-the-dep-590x800.jpeg"></img>
                </div>
            </v-list-item>
        </v-list>
    </div>

</template>

<style scoped>
.content{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(10deg, #FFFAE8 10.67%, #FFE68D 64.88%, #FFDC9B 84.26%);
}
.carousel{
}
.carousel-item{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto auto;
}
.img-wrap{
    width: 100px;
    height: 100px;
    border: 3px solid  #A76700;
}
.v-list{
  background-color: transparent;
    margin-top: 50px;
}


.img-wrap{
    border-radius: 50%;
    border: 3px solid white;
    overflow: hidden;
    background-color: #00acc1;
}

.img-wrap img{
    width: 100%;
}
</style>
