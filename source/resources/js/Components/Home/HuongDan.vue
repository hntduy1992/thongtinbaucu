<script setup>
import boPhieu from '../../../images/bo-phieu.png'

</script>

<template>
    <div class="content-huong-dan">
        <v-row>
            <v-col md="4">
                <v-carousel class="content__left" hide-delimiters  :continuous="false"
                            :show-arrows="false">
                    <v-carousel-item :src="boPhieu" ></v-carousel-item>
                </v-carousel>
            </v-col>
            <v-col>
                <div class="text-md-h4 mb-4 text-center text-teal font-weight-bold">HƯỚNG DẪN QUY TRÌNH BẦU CỬ</div>
                <v-stepper   alt-labels :items="['Bước 1','Bước 2', 'Bước 3','Bước 4','Bước 5', 'Bước 6']" next-text="Tiếp theo" prev-text="Trước đó">
                    <template v-slot:item.1>
                        <v-card title="Đến điểm bỏ phiếu" >
                            <ul>
                                <li>Cử tri phải tự mình đi bầu cử</li>
                                <li>Cử tri mang theo thẻ cử tri</li>
                                <li>Đọc bảng danh sách tiểu sử người ứng cử được niêm yết trong khu vực bỏ phiếu để tìm hiểu kỹ thông tin về các ứng cử viên</li>
                            </ul>
                        </v-card>
                    </template>
                    <template v-slot:item.2>
                        <v-card title="Đọc bảng danh sách" >
                            <ul>
                                <li>Đọc bảng danh sách tiểu sử người ứng cử được niêm yết trong khu vực bỏ phiếu để tìm hiểu kỹ thông tin về các ứng cử viên</li>
                            </ul>
                        </v-card>
                    </template>
                    <template v-slot:item.3>
                        <v-card title="Nhận phiếu bầu" >
                            <ul>
                                <li>Tổ bầu cử hướng dẫn quy trình bỏ phiếu</li>
                                <li>Cử tri đưa thẻ cử tri để nhận phiếu bầu cử (1 phiếu bầu cử ĐBQH và 2 phiếu bầu cử đại biểu HĐND các cấp tỉnh, cấp xã)</li>
                            </ul>
                        </v-card>
                    </template>

                    <template v-slot:item.4>
                        <v-card title="Điền phiếu" >
                            <p>Cử tri di chuyển vào khu vực điền phiếu</p>
                            <p>Trong quá trình viết phiếu, cử tri cần lưu ý một số quy định sau:</p>
                            <ul>
                                <li>Khi cử tri viết phiếu bầu, không ai được xem, kể cả thành viên tổ bầu cử.</li>
                                <li>Không được khoanh tròn, gạch chéo, gạch dưới, gạch trên hàng họ và tên người ứng cử.</li>
                                <li>Không được đánh dấu những kí tự đặc biệt trên phiếu bầu.</li>
                                <li>Không được viết thêm, ghi tên người ngoài danh sách ứng cử vào phiếu bầu.</li>
                                <li>Không được bầu quá số đại biểu được ấn định trong phiếu bầu, hoặc bỏ phiếu bầu trắng.</li>
                                <li>Nếu viết hỏng, cử tri có quyền được đổi phiếu bầu khác.</li>
                                <li>Cử tri không thể tự viết được phiếu bầu thì nhờ người khác viết hộ (người viết phải đảm bảo bí mật)</li>
                            </ul>
                        </v-card>
                    </template>
                    <template v-slot:item.5>
                        <v-card title="Bỏ phiếu" >
                            <p>Đích thân bỏ phiếu vào hòm phiếu sau khi cử tri hoàn thành việc viết phiếu bầu cử.</p>
                            <p>Cử tri vì khuyết tật không tự bỏ phiếu bầu cử được thì nhờ người khác bỏ phiếu</p>
                        </v-card>
                    </template>
                    <template v-slot:item.6>
                        <v-card title="Kết thúc" >
                            <p>Đóng dấu "Đã bỏ phiếu" do Tổ bầu cử đóng vào Thẻ cử tri</p>
                        </v-card>
                    </template>

                </v-stepper>
            </v-col>
        </v-row>
    </div>
</template>

<style scoped>
.content-huong-dan{
    height: 100%;
    display: flex;
    background: linear-gradient(10deg, #FFFAE8 10.67%, #FFE68D 64.88%, #FFDC9B 84.26%);
}

</style>
