<script setup>
import {ref} from "vue";

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
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    }, {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    }, {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    }, {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    },
    {
        index: 1,
        question: 'Câu 1. Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026- 2031 có ý nghĩa chính trị như thế nào?',
        answer: 'Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân là một trong những quyền chính trị cơ bản của công dân đã được Hiến pháp ghi nhận. Bầu cử là phương thức thể hiện ý chí, nguyện vọng và quyền làm chủ của Nhân dân trong việc xây dựng Nhà nước pháp quyền xã hội chủ nghĩa nói chung và thành lập cơ quan quyền lực nhà nước ở trung ương và địa phương nói riêng.\n' +
            '\n' +
            'Cuộc bầu cử đại biểu Quốc hội khoá XVI và đại biểu Hội đồng nhân dân các cấp nhiệm kỳ 2026 - 2031 được tổ chức cùng một ngày trên phạm vi cả nước, trong bối cảnh công cuộc đổi mới ở nước ta sau 40 năm đã đạt được những thành tựu to lớn, có ý nghĩa lịch sử trên mọi lĩnh vực đời sống, xã hội; đồng thời tích cực triển khai việc sắp xếp, tinh gọn tổ chức bộ máy của hệ thống chính trị, tổ chức lại địa giới hành chính và vận hành mô hình chính quyền địa phương 2 cấp bảo đảm tinh, gọn, mạnh, hiệu năng, hiệu lực, hiệu quả để tiến vào kỷ nguyên phát triển mới của dân tộc. Đây là sự kiện chính trị quan trọng của đất nước, diễn ra ngay sau Đại hội đại biểu toàn quốc lần thứ XIV của Đảng, là bước cụ thể hóa nghị quyết gắn liền với công tác cán bộ của Đảng, liên quan đến trách nhiệm của các cấp, các ngành; là nơi để cử tri phát huy quyền làm chủ của công dân, lựa chọn bầu ra những người tiêu biểu, xứng đáng đại diện cho ý chí, nguyện vọng và quyền làm chủ của mình trong Quốc hội và Hội đồng nhân dân các cấp nhiệm kỳ mới, góp phần tích cực vào việc xây dựng, củng cố và hoàn thiện Nhà nước pháp quyền xã hội chủ nghĩa của Nhân dân, do Nhân dân, vì Nhân dân, dưới sự lãnh đạo của Đảng Cộng sản Việt Nam.'
    }
]
const selected = ref(2)
</script>

<template>
    <aside>
        <v-container class="h-100">
            <div class="d-none tablet-title">
                <span class="bg-teal">Hỏi đáp về bầu cử</span>
                <v-text-field variant="outlined" density="compact" prepend-icon="mdi-magnify"
                              placeholder="Nhập để tìm câu hỏi có liên quan" hide-details></v-text-field>

            </div>
            <div class="hoidap-wrap">
                <div class="section-title">
                    <span class="bg-teal">Hỏi đáp về bầu cử</span>
                </div>
                <v-text-field class="section-search" variant="outlined" density="compact" prepend-icon="mdi-magnify"
                              placeholder="Nhập để tìm câu hỏi có liên quan" hide-details></v-text-field>
                <div class="section-content ">
                    <v-expansion-panels class="list-items" v-model="selected">
                        <v-expansion-panel v-for="(item, index) of items">
                            <template v-slot:title>Câu {{index}}. {{ item.question }}</template>
                            <template v-slot:text>{{ item.answer }}</template>
                        </v-expansion-panel>
                    </v-expansion-panels>
                </div>
            </div>
        </v-container>
    </aside>
</template>

<style scoped>
aside {
    width: 100%;
    height: 100%;
    padding: 25px 0;
}
.hoidap-wrap{
    width: inherit;
    height: inherit;
    border: 2px solid var(--root-color);
    border-radius: 10px;
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 50px 20px 20px 20px;
}

.section-title {
    font-size: 1.6rem;
    text-align: center;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateY(50%) translateX(-50%);
}

.section-title span {
    text-wrap: nowrap;
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
    padding:10px;
    width: 100%;
    overflow: auto;
}

@media (max-width: 768px) {
    .section-search{
        display: none;
    }
    aside{
        padding: 0;
    }
    .hoidap-wrap{
        padding: 15px;
    }
    .section-title{
        display: none;

    }
    .tablet-title{
        display: block !important;

    }
    .tablet-title span{
        display: block;
        padding: 10px;
        margin-bottom: 10px;
        text-align: center;
        font-size: calc(1rem + 0.2vw);
        border-bottom: 2px solid var(--root-color);
    }
    .hoidap-wrap{
        border: none;
        padding: 0;
    }
}
</style>
