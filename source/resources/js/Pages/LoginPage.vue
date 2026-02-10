<script setup>
import {useForm} from "@inertiajs/vue3";
import logo from "../../images/logo-sadec.png";
import AuthLayout from "../Layout/AuthLayout.vue";
import {ref} from "vue";

defineOptions({
    layout: AuthLayout
})
const loginForm = useForm({
    username: "",
    password: "",
})
const showPassword = ref(false)
const submit = () => {
    loginForm.post('/login')
}
</script>

<template>
    <v-container fluid class="fill-height login-background">
        <v-row align="center" justify="center">
            <v-col cols="12" sm="8" md="4" lg="3">
                <v-card class="elevation-12 rounded-lg border-gold" border>
                    <v-card-text class="pt-8">
                        <div class="text-center mb-6">
                            <v-img
                                :src="logo"
                                alt="Logo Sa Dec"
                                height="120"
                                contain
                            ></v-img>
                            <h3 class="mt-4 text-red-darken-4 font-weight-black">
                                HỆ THỐNG QUẢN TRỊ
                            </h3>
                        </div>

                        <v-form @submit.prevent="submit">
                            <v-text-field
                                v-model="loginForm.username"
                                label="Tên đăng nhập"
                                prepend-inner-icon="mdi-account"
                                variant="outlined"
                                color="red-darken-4"
                                :error-messages="loginForm.errors.username"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="loginForm.password"
                                label="Mật khẩu"
                                prepend-inner-icon="mdi-lock"
                                :type="showPassword ? 'text' : 'password'"
                                :append-inner-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                                @click:append-inner="showPassword = !showPassword"
                                variant="outlined"
                                color="red-darken-4"
                                :error-messages="loginForm.errors.password"
                                required
                            ></v-text-field>

                            <v-btn
                                color="red-darken-4"
                                block
                                size="large"
                                class="mt-4 white--text"
                                type="submit"
                            >
                                ĐĂNG NHẬP
                            </v-btn>
                        </v-form>
                    </v-card-text>

                    <v-card-actions class="justify-center pb-6">
                        <v-btn variant="text" size="small" color="grey-darken-2">
                            Quên mật khẩu?
                        </v-btn>
                    </v-card-actions>
                </v-card>

                <p class="text-center mt-4 text-white subtitle-6 shadow-text">
                    © 2026 Bản quyền thuộc về Ủy ban Nhân dân Phường Sa Đéc
                </p>
            </v-col>
        </v-row>
    </v-container>
</template>

<style scoped>
.login-background {
    /* Màu nền vàng nhạt giống trong ảnh bạn gửi */
    background-color: #f5f2d0;
    /* Bạn có thể thêm hình nền cánh đồng hoa cúc mờ ở đây */
    background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
    url('https://path-to-your-flower-field-image.jpg');
    background-size: cover;
}

.border-gold {
    border: 2px solid #d4af37 !important; /* Màu vàng đồng của khung bầu cử */
}

.font-weight-black {
    font-weight: 900;
    letter-spacing: 1px;
}

.shadow-text {
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}
</style>
