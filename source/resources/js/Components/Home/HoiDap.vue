<script setup>
const header = [
    {title: 'STT', key: 'index',},
    {title: 'Câu hỏi', key: 'question',},
]
const items = [
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    }
]

</script>

<template>
    <aside>
        <div class="section-title">
            <span class="bg-teal">HỎI ĐÁP VỀ BẦU CỬ</span>
        </div>
        <div class="section-content">
            <v-data-table class="qa-panel"
                          :headers="header"
                          :items="items"
                          show-expand>
                <template v-slot:item.data-table-expand="{ internalItem, isExpanded, toggleExpand }">
                    <v-btn
                        :append-icon="isExpanded(internalItem) ? 'mdi-chevron-up' : 'mdi-chevron-down'"
                        :text="isExpanded(internalItem) ? 'Thu gọn' : 'Trả lời'"
                        class="text-none"
                        color="medium-emphasis"
                        size="small"
                        variant="text"
                        width="105"
                        border
                        slim
                        @click="toggleExpand(internalItem)"
                    ></v-btn>
                </template>
                <template v-slot:expanded-row="{ columns, item }">
                    <tr>
                        <td :colspan="columns.length" class="py-2">
                            <v-sheet rounded="lg" border>
                                <v-card title="Trả lời">
                                    <v-card-text>
                                        {{ item.answer }}
                                    </v-card-text>
                                </v-card>
                            </v-sheet>

                        </td>
                    </tr>
                </template>
            </v-data-table>
            <div class="img">
                <img src="../../../images/hoi-dap.png" alt="hỏi đáp">
            </div>
        </div>
    </aside>
</template>

<style scoped>
aside {
    width: 100%;
    min-height: 100vh;
    padding: 50px;

    border-radius: 10px;
}

.section-title {
    font-size: 1.6rem;
    text-align: center;
    position: relative;
}

.section-title span {
    padding: 20px;
    border-radius: 30px;
    border-left: 4px solid var(--root-color);
    border-right: 4px solid var(--root-color);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
}

.section-content {
    padding: 50px 20px 20px;
    width: 100%;
    border: 2px solid var(--root-color);
    height: 90%;
    display: flex;
    border-radius: 20px;
}

.qa-panel {
    width: 100%;
    flex: 1;
    overflow: auto;
}

.section-content .img {
    padding: 20px;
    width: 40%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.section-content .img img {
    width: 100%;
}
</style>
